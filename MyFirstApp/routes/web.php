<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Forma sin controlador
/*
Route::get('/usuarios', function () {
    $usuarios = App\Usuarios::all();
    echo $usuarios;
});

Route::get('/usuarios/{id}', function ($id) {
    $usuarios = App\Usuarios::find($id);
    echo $usuarios;
});
*/

//Forma con controlador
//Esto es la ruta usuarios, usa el controlador UsuariosController y el metodo Usuarios
//De esta forma vamos a un metod especifico de la clase
Route::get('/usuarios', 'UsuariosController@index');
Route::post('/usuarios', 'UsuariosController@store');
//De esta forma accedemos a la clase
//Route::resource('/usuarios', 'UsuariosController');

Route::get('/prueba/{name}/{name2}', 'PruebaController@prueba');


//Acceder al resource
Route::resource('trainers', 'TrainerController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
