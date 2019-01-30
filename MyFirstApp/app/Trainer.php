<?php

namespace MyFirstApp;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = "trainers";

    protected $fillable = ['nombres', 'apellidos', 'mail', 'avatar', 'password'];

    //
}
