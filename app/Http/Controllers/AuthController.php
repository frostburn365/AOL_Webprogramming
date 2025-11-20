<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function SignUp(Request $request){
       $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'Phonenumber' => ['required'],
            'password' => ['required', 'min:3','confirmed']
       ]);

       return view('MainPages.Dashboard');
    }
}
