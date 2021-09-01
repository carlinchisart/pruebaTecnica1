<?php

namespace Database\Factories;

use App\Models\Lote;
use App\Models\LoteManifiesto;
use App\Models\Manifiesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoteManifiestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoteManifiesto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manifiesto_id' => Manifiesto::inRandomOrder()->first()->id,
            'lote_id' => Lote::inRandomOrder()->first()->id,
            'estado' => $this->faker->randomElement(array('ENTREGADO','DEVUELTO'))
        ];
    }
}
