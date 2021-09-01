<?php

namespace Database\Factories;

use App\Models\Finca;
use App\Models\Lote;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_recoleccion' => $this->faker->date(),
            'num_mangos' => rand(500,5000),
            'finca_id' => Finca::inRandomOrder()->first()->id
        ];
    }
}
