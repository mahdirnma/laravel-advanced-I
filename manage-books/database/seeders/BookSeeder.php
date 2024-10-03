<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'book1',
            'description' => 'lorem ipsum',
            'publication_year' => '1999',
            'user_id' => 1,
        ]);
        Book::create([
            'title' => 'book2',
            'description' => 'lorem ipsum2',
            'publication_year' => '1980',
            'user_id' => 2,
        ]);

    }
}
