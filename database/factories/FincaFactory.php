<?php

namespace Database\Factories;

use App\Models\Finca;
use Illuminate\Database\Eloquent\Factories\Factory;

class FincaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Finca::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->streetAddress(),
            'num_arboles' => rand(100,10000)
        ];
    }
}
