<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\JournalEntryController;
use App\Http\Middleware\EnsureUserAuth;


Route::middleware('guest')->group(function (){
    Route::get('/', function () {
        return view('PreLoginPages.home');
    });
    
    Route::get('/Home', function () {
        return view('PreLoginPages.home');
    });

    Route::view('/Login', 'Login')->name('Login');
    Route::post('/Login', [UserAuthController::class, 'Login']);

    Route::view('/SignUp', 'SignUp')->name('SignUp');
    Route::post('/SignUp', [UserAuthController::class, 'SignUp']);
    
    Route::get('/Mission', function () {
        return view('PreLoginPages.OurMission');
    });
    
    Route::get('/How', function () {
        return view('PreLoginPages.HowItWorks');
    });
});


Route::middleware(EnsureUserAuth::class)->group(function () {
    Route::get('/Dashboard', function () {
        return view('MainPages.Dashboard');
    })->name('Dashboard');
    
    Route::get('/Insights', function () {
        return view('MainPages.Insights');
    });
    
    Route::get('/Journal', function () {
        return view('MainPages.Journal');
    });

    Route::resource('Journal', JournalEntryController::class);
    
    Route::get('/Community', function () {
        return view('MainPages.Community');
    });
    
    Route::post('/Logout', [UserAuthController::class, 'Logout'])->name('Logout');
});