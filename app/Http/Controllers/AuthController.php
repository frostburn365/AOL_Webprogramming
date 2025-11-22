<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function SignUp(Request $request){
        //validation
       $validate = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'Phonenumber' => ['required'],
            'password' => ['required', 'min:3','confirmed']
       ]);

       //Register to db

       //Login


       //Redirect
       return redirect()->route('Dashboard');
    }
}
