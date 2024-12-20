<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'CityName' => 'Jakarta'
            ],
            [
                'CityName' => 'Padang'
            ],
            [
                'CityName' => 'Yogyakarta'
            ],
            [
                'CityName' => 'Belitung'
            ]
        ];

        DB::table('cities')->insert($cities);

    }
}
