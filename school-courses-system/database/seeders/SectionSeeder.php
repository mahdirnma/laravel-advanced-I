<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'capacity' => '15',
            'level' => 'basic',
            'type' => 'public',
            'status' => 'doing',
            'course_id' => '1',
        ]);

    }
}
