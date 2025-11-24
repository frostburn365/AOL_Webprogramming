<?php

namespace App\Http\Controllers;

use App\Models\UserAuth;
use App\Http\Requests\StoreUserAuthRequest;
use App\Http\Requests\UpdateUserAuthRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function SignUp(Request $request){
        //Test user
        //Dummy621
        //AC6@gmail.com
        //08111196
        //C0ralSurg3

        //validation
       $validate = $request->validate([
            'username' => ['required'], 
            'email' => ['required', 'email'],
            'Phonenumber' => ['required'],
            'password' => ['required', 'min:3','confirmed']
       ]);

        //password hashing
        $validate['password'] = Hash::make($validate['password']);

       //Register to db
       $user = UserAuth::create($validate);

       //Login
       Auth::login($user);

       //Redirect
       return redirect()->route('Dashboard');
    }

    public function Login(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

      //attempt 1: possible theory as to why this 'dd' line returns false, the 'Auth' being called might be referring to something else
      //dd(Auth::attempt($validate, $request->Remember));
      //attempt 2: the model used doesn't extend Laravel's required class for authentication, go check UserAuth.php and config/auth.php
      //attempt 3: it works!, as long as 'remember me' checkbox is not turned on, fix the db
      //Note: fix db so ID doesn't have gaps, eg: 1, 2, 6, 8, etc
      //new note: I'm an idiot, that's how relational databases work and how they SHOULD WORK!
      //attempt 4: it works!, this time when 'remember me' checkbox is on OR of, fixed the db
   
       if(Auth::attempt($validate, $request->Remember)){
            return redirect()->route('Dashboard');
       } else {
            return back()->withErrors([
                'failed' => 'The provided credentials are not within our database'
            ]);
       }
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserAuthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAuth $userAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAuth $userAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserAuthRequest $request, UserAuth $userAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAuth $userAuth)
    {
        //
    }
}
