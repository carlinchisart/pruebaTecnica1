<?php

namespace Database\Factories;

use App\Models\Camion;
use App\Models\Manifiesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManifiestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manifiesto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'camion_id' => Camion::inRandomOrder()->first()->id,
        ];
    }
}
