<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
        ]);

        Masyarakat::create([
            'username' => 'pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => bcrypt('pengguna'),
            'remember_token' => Str::random(10),
        ]);
    }
}
