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
            'nama' => 'Admin',
            'alamat' => 'Jl. Admin',
            'no_hp' => '081234567890',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'check_admin' => 'Terverifikasi'
        ]);
       User::create([
            'nama' => 'User',
            'alamat' => 'Jl. User',
            'no_hp' => '081234567890',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'check_admin' => 'Terverifikasi'
       ]);

        User::create([
            'nama' => 'User 2',
            'alamat' => 'Jl. User 2',
            'no_hp' => '081234567890',
            'email' => 'attah1335@gmail.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'check_admin' => 'Belum Terverifikasi'
        ]);

        User::create([
            'nama' => 'User 3',
            'alamat' => 'Jl. User 3',
            'no_hp' => '081234567890',
            'email' => 'nasirin@gmail.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'check_admin' => 'Belum Terverifikasi'
        ]);
    }
}
