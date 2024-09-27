<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Title::create([
            'value' => 'lorem ipsum',
            'key' => '1',
        ]);
        Title::create([
            'value' => 'lorem ipsum2',
            'key' => '2',
        ]);
        Title::create([
            'value' => 'lorem ipsum3',
            'key' => '3',
        ]);

    }
}
