<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionCenterSeeder extends Seeder
{
    /**
     *
     *
     */
    public function run(): void
    {
        $collectioncenter = [
            [
                'name' => 'Jakarta Collection Center',
                'address' => 'Jl. Jakarta Raya No 59',
                'photo' => 'img/collectioncenter/jakartacenter.jpeg',
                'contact_number' => '0831-2313-6512',
                'operating_hours' => '08:00 - 17:00',
                'cities_id' => 1,
            ],
            [
                'name' => 'Padang Collection Center',
                'address' => 'Jl. Padang Raya No 59',
                'photo' => 'img/collectioncenter/padangcenter.jpeg',
                'contact_number' => '0852-5124-8243',
                'operating_hours' => '09:00 - 17:00',
                'cities_id' => 2,
            ],
            [
                'name' => 'Yogyakarta Collection Center',
                'address' => 'Jl. Yogyakarta Raya No 12',
                'photo' => 'img/collectioncenter/yogyakartacenter.jpeg',
                'contact_number' => '0816-2213-6315',
                'operating_hours' => '07:00 - 17:00',
                'cities_id' => 3,
            ],
            [
                'name' => 'Belitung Collection Center',
                'address' => 'Jl. Belitung Raya No 59',
                'photo' => 'img/collectioncenter/belitungcenter.jpeg',
                'contact_number' => '0878-2578-1583',
                'operating_hours' => '08:00 - 17:00',
                'cities_id' => 4,
            ]
        ];

        DB::table('collectioncenters')->insert($collectioncenter);
    }
}
