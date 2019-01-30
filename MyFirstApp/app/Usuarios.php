<?php

namespace MyFirstApp;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //esto se usa para cuando el nombre de la clase no sea en plurar y en la bd si
    protected $table = "usuarios";

}
