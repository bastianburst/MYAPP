<?php

use Illuminate\Database\Seeder;
use MyFirstApp\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Aqui creamos los role sy estos se insertarán en la base de datos
        $role = new Role();
        $role->name = "admin";
        $role->descripcion = "Administrador";
        $role->save();

        //Aqui creamos los role sy estos se insertarán en la base de datos                $role = new Role();
        $role = new Role();
        $role->name = "user";
        $role->descripcion = "Usuarios";
        $role->save();
    }
}
