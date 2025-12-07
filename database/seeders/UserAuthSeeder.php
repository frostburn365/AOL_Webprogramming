<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserAuth;
use Illuminate\Support\Facades\Hash;

class UserAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserAuth::create([
            'username' => 'journal_starter', 
            'email' => 'starter@example.com', 
            'password' => Hash::make('password'), 
            'Phonenumber' => '5551234567',
        ]);
    }
}
