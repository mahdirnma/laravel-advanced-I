<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
             'password' => Hash::make('123'),
             'role' => '1'
         ]);
         User::create([
             'name' => 'mahdi',
             'username' => 'Mahdi',
             'password' => Hash::make('123'),
             'role' => '3'
         ]);

    }
}
