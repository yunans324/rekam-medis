<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a test doctor account
        User::create([
            'name' => 'Dr. John Doe',
            'email' => 'doctor@example.com',
            'password' => Hash::make('password123'),
            'no_str' => 'STR123456',
            'specialization' => 'Umum',
            'phone' => '08123456789'
        ]);
    }
}
