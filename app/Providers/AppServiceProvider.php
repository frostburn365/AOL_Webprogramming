<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan; // If you added this for migrations
use Illuminate\Support\Facades\File;   // <--- THIS IS THE MISSING LINE

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ... (Your existing code here, including VERCEL/SQLite fixes)
        
        if (env('VERCEL_URL') && env('DB_CONNECTION') === 'mysql') {
            $dbPath = env('DB_DATABASE', database_path('database.sqlite'));

            if (!File::exists($dbPath)) { // Error occurs here without the 'use' statement
                File::put($dbPath, '');
                Artisan::call('migrate', ['--force' => true]);
            }
        }
    }
}