<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\JournalEntryController;
use App\Http\Controllers\CommunityPostsController;
use App\Http\Middleware\EnsureUserAuth;

// ==============================
// GUEST ROUTES (Not Logged In)
// ==============================
Route::middleware('guest')->group(function (){
    Route::get('/', function () { return view('PreLoginPages.home'); });
    Route::get('/Home', function () { return view('PreLoginPages.home'); });

    Route::view('/Login', 'Login')->name('Login');
    Route::post('/Login', [UserAuthController::class, 'Login']);

    Route::view('/SignUp', 'SignUp')->name('SignUp');
    Route::post('/SignUp', [UserAuthController::class, 'SignUp']);
    
    Route::get('/Mission', function () { return view('PreLoginPages.OurMission'); });
    Route::get('/How', function () { return view('PreLoginPages.HowItWorks'); });
});

// ==============================
// AUTH ROUTES (Logged In)
// ==============================
Route::middleware(EnsureUserAuth::class)->group(function () {
    
    // 1. Dashboard
    Route::get('/Dashboard', function () { 
        return view('MainPages.Dashboard'); 
    })->name('Dashboard');
    
    // 2. Insights
    Route::get('/Insights', function () { 
        return view('MainPages.Insights'); 
    });

    // 3. Journal 
    Route::get('/Journal', function () { 
        // Note: You must pass $entries here if you want to display them!
        // For now we return the view, but you might need the Controller's index method later.
        $entries = \App\Models\JournalEntry::where('user_id', session('user_id'))->get();
        return view('MainPages.Journal', compact('entries')); 
    });

    // 4. Settings
    Route::get('/settings', function () { 
        return view('MainPages.Settings'); 
    });

    // 5. Community
    Route::get('/Community', [CommunityPostsController::class, 'index'])->name('Community');
    
    // === RESOURCE ROUTES (CRITICAL: These enable .store, .destroy, .update) ===
    // We place them AFTER the specific GET routes so the URLs above take priority
    Route::resource('Journal', JournalEntryController::class); 
    Route::resource('community', CommunityPostsController::class);
    
    // 6. Logout
    Route::post('/Logout', [UserAuthController::class, 'Logout'])->name('Logout');
});