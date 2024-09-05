<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'firstname' => 'aliraza',
            'lastname' => 'rafie',
            'birth_year' => '1998',
            'father_name' => 'mahmood',
            'father_job' => 'teacher',
            'father_phone' => '0918975596',
            'address' => 'madar square',
        ]);

    }
}
