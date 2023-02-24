<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category
        $category = [
            [
                'name' => 'Sports cars',
            ],
            [
                'name' => 'SUVs',
            ],
            [
                'name' => 'Coupes',
            ],
            [
                'name' => 'Convertibles',
            ],
            [
                'name' => 'Muscle car',
            ],
            [
                'name' => 'Luxury sedans',
            ],
            [
                'name' => 'Sports bike',
            ],
            [
                'name' => 'Adventure / Touring',
            ],
            [
                'name' => 'Cruiser / Chopper',
            ],
            [
                'name' => 'Off-Road',
            ],
            [
                'name' => 'Scooter',
            ],
            [
                'name' => 'Standard / Commuter',
            ],
            [
                'name' => 'Café racer',
            ],
            [
                'name' => 'Trike',
            ],
            [
                'name' => 'Trailer',
            ],
            [
                'name' => 'Karting',
            ],
            [
                'name' => 'Mo-Ped',
            ],
            [
                'name' => 'Other',
            ]
        ];
        DB::table('categories')->insert($category);
    }
}
