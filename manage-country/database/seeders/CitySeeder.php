<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name' => 'Tehran',
            'population' => '20000000',
            'country_id' => '1',
        ]);
        City::create([
            'name' => 'London',
            'population' => '50000000',
            'country_id' => '2',
        ]);

    }
}
