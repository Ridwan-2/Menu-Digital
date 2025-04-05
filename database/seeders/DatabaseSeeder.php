<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 5 Admin
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Admin $i",
                'username' => "admin$i",
                'email' => "admin$i@example.com",
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        }

        // 5 User Biasa
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "User $i",
                'username' => "user$i",
                'email' => "user$i@example.com",
                'password' => Hash::make('password'),
                'role' => 'user',
            ]);
        }
    }
}
