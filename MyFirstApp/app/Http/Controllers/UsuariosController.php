<?php

namespace MyFirstApp\Http\Controllers;

use Illuminate\Http\Request;
//Incluir el servicio Usuarios.php creado con el artisan
use MyFirstApp\Usuarios;
use MyFirstApp\Http\Requests\StoreUserrequest;

class UsuariosController extends Controller
{
    //
    public function index(){
        $usuarios = Usuarios::all();
        return $usuarios;
    }
    

    public function store(StoreUserrequest $request)
    {
        //return $request->all();
        $usuario = new Usuarios();
        $usuario->nombres = $request->input('nombres');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->mail = $request->input('mail');
        $usuario->password = $request->input('password');
        $usuario->save();
        $response = array();
        $response["success"] = true;  
    
        echo json_encode($response);
        echo "succes";
        return 'Saved';
        //return $request->input('nombre');
        //
    }
}
