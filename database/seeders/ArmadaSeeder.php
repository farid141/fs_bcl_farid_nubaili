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
            'kendaraan' => 'Mobil Box',
            'ketersediaan'=>'ada',
            'kapasitas'=>300,
        ]);
        Armada::create([
            'kendaraan' => 'Truck',
            'ketersediaan'=>'ada',
            'kapasitas'=>500,
        ]);
        Armada::create([
            'kendaraan' => 'Kapal',
            'ketersediaan'=>'ada',
            'kapasitas'=>3000,
        ]);
        Armada::create([
            'kendaraan' => 'Pesawat',
            'ketersediaan'=>'ada',
            'kapasitas'=>5000,
        ]);
    }
}
