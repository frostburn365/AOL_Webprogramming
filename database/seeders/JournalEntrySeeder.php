<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JournalEntry;
use App\Models\UserAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JournalEntrySeeder extends Seeder
{
    public function run(): void
    {
        $starterUser = UserAuth::where('email', 'starter@example.com')->first();

        if ($starterUser) {
            JournalEntry::create([
                'user_id' => $starterUser->id, 
                'title' => 'My First Journal Entry',
                'content' => 'Welcome to your digital journal! Use this space to track your thoughts, goals, and experiences. You can edit or delete this entry anytime.',
                'created_at' => now(),
            ]);
        }
    }
}
