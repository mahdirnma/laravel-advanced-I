<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Professor::create([
             'firstname' => 'erfan',
             'lastname' => 'abbasi',
             'degree' => 'master',
             'field' => 'engineering',
             'orientation' => 'energy',
             'last_education_place' => 'tehran',
             'birth_year' => '2000',
             'degree_year' => '2024',
         ]);
    }
}
