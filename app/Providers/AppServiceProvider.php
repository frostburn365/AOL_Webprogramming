<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // Only if you use 'storage:link' for public files.
        if (env('VERCEL_URL')) {
            // Define the storage path using the Vercel's writable /tmp directory
            $this->app->useStoragePath(env('TEMP_DIR', '/tmp/storage')); 
            
            // Create the symbolic link dynamically if it doesn't exist
            if (!File::exists(public_path('storage'))) {
                File::link('/tmp/storage/app/public', public_path('storage'));
            }
        }
    }
}
