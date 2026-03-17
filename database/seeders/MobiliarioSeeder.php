<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobiliario;

class MobiliarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Mobiliario();
        $nuevo->aula_id=1;
        $nuevo->descripcion="Cañon";
        $nuevo->save();
    }
}
