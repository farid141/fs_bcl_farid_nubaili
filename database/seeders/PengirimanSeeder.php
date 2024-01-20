<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengiriman;

class PengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengiriman::create([
            'id_armada' => 1,
            'tanggal_kirim'=>'03-02-2022',
            'loc_asal'=>'7.32133,-112.43245',
            'loc_tujuan'=>'8.32133,-123.43245',
            'status'=>'sampai'
        ]);
        Pengiriman::create([
            'id_armada' => 2,
            'tanggal_kirim'=>'03-02-2022',
            'loc_asal'=>'7.32133,-112.43245',
            'loc_tujuan'=>'8.32133,-123.43245',
            'status'=>'sampai'
        ]);
        Pengiriman::create([
            'id_armada' => 3,
            'tanggal_kirim'=>'03-02-2022',
            'loc_asal'=>'7.32133,-112.43245',
            'loc_tujuan'=>'8.32133,-123.43245',
            'status'=>'sampai'
        ]);
    }
}
