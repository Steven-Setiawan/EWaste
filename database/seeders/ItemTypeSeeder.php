<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ItemType = [
            [
                'TypeName' => 'Electronics'
            ],
            [
                'TypeName' => 'Fragile'
            ],
            [
                'TypeName' => 'Furniture'
            ],
            [
                'TypeName' => 'Tools'
            ],
        ];

        DB::table('itemtype')->insert($ItemType);
    }
}
