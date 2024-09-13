<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'A15',
            'description' => 'lorem ipsum dolor sit amet',
            'price' => 1500000,
            'category_id' => 2,
        ]);
        Product::create([
            'title' => 'canon 2000d',
            'description' => 'lorem ipsum dolor sit amet2',
            'price' => 2000000,
            'category_id' => 1,
        ]);

    }
}
