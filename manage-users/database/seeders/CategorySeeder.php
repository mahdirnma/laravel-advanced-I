<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'admin',
            'description' => 'lorem ipsum dolor sit amet',
        ]);
        Category::create([
            'title' => 'producer',
            'description' => 'lorem ipsum dolor sit amet2',
        ]);

    }
}
