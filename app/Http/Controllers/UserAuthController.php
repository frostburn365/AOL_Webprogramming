<?php

namespace App\Http\Controllers;

use App\Models\UserAuth;
use App\Http\Requests\StoreUserAuthRequest;
use App\Http\Requests\UpdateUserAuthRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function SignUp(Request $request){
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
       UserAuth::create($validate);

       //Login

       //Redirect
       return redirect()->route('Dashboard');
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
