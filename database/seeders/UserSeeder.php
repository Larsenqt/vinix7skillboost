<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Dikrullah',
            'email' => 'dikrullah@gmail.com',
            'password' => Hash::make('qwerty123'),
            'email_verified_at' => now(),
        ]);
    }
}
