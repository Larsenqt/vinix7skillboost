<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'dikrullah@admin.com'], // cek jika sudah ada
            [
                'name'     => 'Diki Admin',
                'password' => Hash::make('qwerty123'),
            ]
        );
    }
    
}
