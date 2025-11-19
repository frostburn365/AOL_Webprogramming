<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('PreLoginPages.home');
});

Route::get('/Home', function () {
    return view('PreLoginPages.home');
});

Route::view('/SignUp', 'SignUp')->name('SignUp');
Route::post('/SignUp', [AuthController::class, 'SignUp']);

Route::get('/Mission', function () {
    return view('PreLoginPages.OurMission');
});

Route::get('/How', function () {
    return view('PreLoginPages.HowItWorks');
});

Route::get('/Login', function () {
    return view('Login');
});


Route::get('/Dashboard', function () {
    return view('MainPages.Dashboard');
});

Route::get('/Journal', function () {
    return view('MainPages.Journal');
});

Route::get('/Community', function () {
    return view('MainPages.Community');
});


