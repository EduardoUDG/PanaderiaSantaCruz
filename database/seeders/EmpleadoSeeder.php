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
        Empleados::factory(50)->create();
    }
}
