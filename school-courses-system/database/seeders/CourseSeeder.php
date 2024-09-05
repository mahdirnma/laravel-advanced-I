<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'php',
            'description' => 'lorem ipsum',
            'start_date' => '07-09-2024',
            'end_date' => '07-10-2024',
            'professor_id' => '1',
        ]);
    }
}
