<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clientes;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cliente = new Clientes();
        $cliente->Nombre = "Nombre cliente";
        $cliente->ApellidoPaterno = "ApellidoPaterno";
        $cliente->ApellidoMaterno = "ApellidoMaterno";
        $cliente->Direccion = "Santa julia 810";
        $cliente->Municipio = "Tlaquepaque";
        $cliente->Telefono = "3322384893";
        $cliente->Correo = "correo@correo.com";
        $cliente->Edad = "21";

        $cliente->save();
    }
}
