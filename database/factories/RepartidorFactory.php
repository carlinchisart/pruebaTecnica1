<?php

namespace Database\Factories;

use App\Models\Repartidor;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepartidorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repartidor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identificacion' => $this->faker->randomNumber(),
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->streetAddress,
            'telefono' => $this->faker->randomNumber()
        ];
    }
}
