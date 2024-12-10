<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EwasteOrderSeeder extends Seeder
{
    /**
     *
     */
    public function run(): void
    {
        $ewaste = [
            [
                'user_id' => 2,
                'collectioncenters_id' => 1,
                'item_name' => 'Laptop',
                'itemtype_id' => 1,
                'description' => 'Asus TUF Laptop 2018',
                'image_url' => 'img/item/item1.jpeg',
                'status' => 'pending'
            ],
            [
                'user_id' => 2,
                'collectioncenters_id' => 1,
                'item_name' => 'Soffa',
                'itemtype_id' => 3,
                'description' => 'Blue Circular Soffa',
                'image_url' => 'img/item/item1.jpeg',
                'status' => 'pending'
            ],
            [
                'user_id' => 2,
                'collectioncenters_id' => 1,
                'item_name' => 'Mouse',
                'itemtype_id' => 1,
                'description' => 'RGX-m2 Mouse',
                'image_url' => 'img/item/item1.jpeg',
                'status' => 'pending'
            ]
        ];

        DB::table('ewasteorders')->insert($ewaste);
    }
}
