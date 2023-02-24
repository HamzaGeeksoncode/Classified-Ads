<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Model
        $Model = [
            ['name' => 'Abarth'],
            ['name' =>  '124 ML'],
            ['name' => '595'],
            ['name' => '695'],
            ['name' => 'F595'],
            ['name' => 'other'],
            ['name' => 'Acura'],
            ['name' => 'ILX'],
            ['name' => 'MDX'],
            ['name' => 'NSX'],
            ['name' => 'RDX'],
            ['name' => 'RSX/Integra'],
            ['name' => 'TLX'],
            ['name' => 'Other'],
        ];
        DB::table('ad_models')->insert($Model);
    }
}
