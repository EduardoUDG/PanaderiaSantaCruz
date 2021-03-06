<?php

namespace Database\Factories;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Mail;

class ClientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name,
            'ApellidoPaterno' => $this->faker->sentence(),
            'ApellidoMaterno' => $this->faker->sentence(),
            'Direccion' => $this->faker->sentence(),
            'Municipio' => $this->faker->sentence(),
            'Telefono' => $this->faker->sentence(),
            'Correo' => $this->faker->unique()->safeEmail,
            'Edad' => $this->faker->randomElement(['18','34','23','32','21','19'])
        ];
    }
}
