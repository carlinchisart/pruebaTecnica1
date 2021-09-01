<?php

namespace Database\Seeders;

use App\Models\Camion;
use App\Models\Finca;
use App\Models\Lote;
use App\Models\LoteManifiesto;
use App\Models\Manifiesto;
use App\Models\Repartidor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Finca::factory(10)->create();
        Repartidor::factory(50)->create();
        Camion::factory(20)->create();
        Lote::factory(200)->create();
        Manifiesto::factory(500)->create();
        LoteManifiesto::factory(2000)->create();
    }
}
