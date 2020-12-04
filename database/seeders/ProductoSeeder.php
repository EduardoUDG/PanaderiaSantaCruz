<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productos;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Productos::factory(30)->create();
    }
}
