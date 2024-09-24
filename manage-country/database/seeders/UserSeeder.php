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
             'name' => 'ali',
             'username' => 'alii',
             'password' => '123',
         ]);
         User::create([
             'name' => 'mahdi',
             'username' => 'Mahdi',
             'password' => '123',
         ]);
    }
}
