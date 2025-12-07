<?php

namespace Database\Seeders;

use App\Models\UserAuth;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserAuthSeeder::class,
        ]);
    }
}
