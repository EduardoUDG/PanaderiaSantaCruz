<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleados;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empleado = new Empleados();
        $empleado->Nombre = "Nombre empleado";
        $empleado->ApellidoPaterno = "ApellidoPaterno";
        $empleado->ApellidoMaterno = "ApellidoMaterno";
        $empleado->Direccion = "Av. romero 231";
        $empleado->Municipio = "El verde";
        $empleado->Telefono = "3322384834";
        $empleado->Correo = "empleado@correo.com";
        $empleado->Edad = "18";

        $empleado->save();
    }
}
