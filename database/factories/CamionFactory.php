<?php

namespace Database\Factories;

use App\Models\Camion;
use App\Models\Finca;
use App\Models\Repartidor;
use Illuminate\Database\Eloquent\Factories\Factory;

class CamionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Camion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'finca_id' => Finca::inRandomOrder()->first()->id,
            'repartidor_id' => Repartidor::inRandomOrder()->first()->id
        ];
    }
}
