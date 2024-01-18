<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Armada;

class ArmadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Armada::create([
            'kendaraan' => 'truck bsr',
            'ketersediaan'=>'tersedia',
            'kapasitas'=>500,
        ]);
        Armada::create([
            'kendaraan' => 'mobil box',
            'ketersediaan'=>'tersedia',
            'kapasitas'=>300,
        ]);
        Armada::create([
            'kendaraan' => 'kapal',
            'ketersediaan'=>'tersedia',
            'kapasitas'=>5000,
        ]);
    }
}
