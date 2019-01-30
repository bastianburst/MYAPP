<?php

namespace MyFirstApp\Http\Controllers;

use Illuminate\Http\Request;
use MyFirstApp\Usuarios;
use MyFirstApp\Trainer;
use MyFirstApp\Http\Requests\StoreTrainerrequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $request->user()->authorizeRoles(['user', 'admin']);
        $usuarios = Trainer::all();
        //return $usuarios;
        $now = new \DateTime();
        $hour = $now->format('d-m-Y H:i:s');
        echo $hour;
        return view('trainers.usaurioslist', compact('usuarios'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        return view('trainers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerrequest $request)
    {

        //llamamos las validaciones
        //Con esto se crea un array con las validaciones que laravel puede ofrecer
        /*$validateData = $request->validate([
            'nombre' => 'required| max:10',
            'apellido' => 'required| max:10',
            'avatar' => 'required| image',
            'mail' => 'required',
            'pass' => 'required | max:12 | min: 8' 
        ]);*/

        //ver la fecha actual
        $now = new \DateTime();
        $hour = $now->format('d-m-Y H:i:s');
        //hasta aqui
//SUBIR ARCHIVOS GUARDANDO RUTA EN BASE DE DATOS E IMAGEN EN CARPETA
        if($request->hasFile('avatar')){
            //validar si hay un archivo
            $file = $request->file('avatar');
            //darle un nombre con la fecha y nombre de archivo para asegurarnos de que no haya repetidos
            $name = time().$file->getClientOriginalName();
            echo $name;
            //Guardar en una carpeta en mi proyecto
            $file->move(public_path().'/images/', $name);
        }
        //echo $hour;
        //return $request->all();
        $usuario = new Trainer();
        $usuario->nombres = $request->input('nombre');
        $usuario->apellidos = $request->input('apellido');
        $usuario->mail = $request->input('mail');
        $usuario->password = $request->input('pass');
        $usuario->avatar = $name;
        //aqui guardamos la ruta de la imagen en el campo de la bd
        
        //$usuario->updated_at = $hour;
        //$usuario->created_at = $hour;
        $usuario->save();
        //$response = array();
        //$response["success"] = true;  
    
        //echo json_encode($response);

        //Esto es un repsonse con redirect dentro de la aplicación
        return redirect()->route('trainers.index');
        //return 'Saved';
        //return $request->all();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer, Request $request)
    {
        //imlicit binding
        //$trainer = Trainer::find($id);
        $request->user()->authorizeRoles(['admin']);
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer, Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('trainers.edit', compact('trainer'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //Aqui seria que tomara todo
        //$trainer->fill($request->all());
        //Aqui le decimos que coja todos los parametros y llene el request con eso, excepto el avatar
        $trainer->fill($request->except('avatar'));
        //validamos si hay imagen para reemplazar
        if($request->hasFile('avatar')){
            //validar si hay un archivo
            $file = $request->file('avatar');
            //darle un nombre con la fecha y nombre de archivo para asegurarnos de que no haya repetidos
            $name = time().$file->getClientOriginalName();
            //asignar nuevo nombre que se guarda en base de datos
            $trainer->avatar = $name;
            //Guardar en una carpeta en mi proyecto
            $file->move(public_path().'/images/', $name);
        }
        //mandar el post, solo  se diferencia del PUT por lo que se pone en el formulario
        $trainer->save();
        return redirect()->route('trainers.show', [$trainer])->with('status', 'Entrenador actualizado correctamente');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //elimnar la imagen
        $file_path = public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        //Eliminar el entrenador
        $trainer->delete();
        return redirect()->route('trainers.index');
        //
    }
}
