<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengiriman>
 */
class PengirimanFactory extends Factory
{

    // protected $model = Pengiriman::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = Carbon::tomorrow();
        $endDate = Carbon::now()->addYears(1);
        $lat_asal = 7+mt_rand(0, 1000000) / 100000;
        $long_asal = -112+mt_rand(0, 1000000) / 100000;
        $lat_tujuan = 8+mt_rand(0, 1000000) / 100000;
        $long_tujuan = -110+mt_rand(0, 1000000) / 100000;
        
        return [
            'id_armada'=>mt_rand(1,4),
            'tanggal_kirim'=>$this->faker->dateTimeBetween($startDate, $endDate)->format('d-m-Y'),
            'loc_asal'=>$lat_asal.','.$long_asal,
            'loc_tujuan'=>$lat_tujuan.','.$long_tujuan,
            'status'=>$this->faker->randomElement(['ada', 'tidak'])
        ];
    }
}
