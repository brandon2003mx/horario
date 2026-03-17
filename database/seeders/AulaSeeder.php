<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aula;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nueva = new Aula();
        $nueva->nombre = 'D1';
        $nueva->capacidad  = 30;
        $nueva->save();
    }
}
