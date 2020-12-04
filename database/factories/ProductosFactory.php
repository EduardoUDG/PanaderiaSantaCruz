<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name,
            'Precio' => $this->faker->numberBetween(1,20),
            'Descripcion' => $this->faker->sentence(),
            'Foto' => '.png'
        ];
    }
}
