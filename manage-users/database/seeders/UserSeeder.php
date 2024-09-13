<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ali azizi',
            'age' => '24',
            'gender' => 'male',
            'role' => '2',
            'username' => 'alii',
            'password' => '123',
            'category_id' => '1',
        ]);
        User::create([
            'name' => 'mahdi rahnama',
            'age' => '24',
            'gender' => 'male',
            'role' => '1',
            'username' => 'Mahdi',
            'password' => '123',
            'category_id' => '1',

        ]);
        User::create([
            'name' => 'reza heidari',
            'age' => '20',
            'gender' => 'male',
            'role' => '3',
            'username' => 'rezaa',
            'password' => '456',
            'category_id' => '2',
        ]);
        User::create([
            'name' => 'sara abbasi',
            'age' => '30',
            'gender' => 'female',
            'role' => '4',
            'username' => 'saraa',
            'password' => '456',
            'category_id' => '2',
        ]);

    }
}
