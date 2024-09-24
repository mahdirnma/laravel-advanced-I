<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Country::create([
             'name' => 'Iran',
             'capital' => 'Tehran',
             'population' => '85000000',
             'language' => 'Persian',
         ]);
         Country::create([
             'name' => 'England',
             'capital' => 'London',
             'population' => '95000000',
             'language' => 'English',
         ]);
    }
}
