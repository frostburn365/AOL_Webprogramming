<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
});
