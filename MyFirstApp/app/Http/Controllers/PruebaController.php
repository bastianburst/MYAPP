<?php

//Definir como llamar esta clase
namespace MyFirstApp\Http\Controllers;

//Definir que uso el archivo Controller aqui importamos
use MyFirstApp\Http\Controllers\Controller;

class PruebaController extends Controller{
    public function prueba($param, $param2){
        return 'Estoy dentro de prueba controller' . $param . ' y ' . $param2;
    }
}

