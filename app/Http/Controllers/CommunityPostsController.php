<?php

namespace App\Http\Controllers;

use App\Models\CommunityPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = CommunityPosts::all();

        return view('MainPages.Community', ['posts' => $posts]);
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
    public function store(Request $request)
    {
        
        //validate
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $validatedData['username'] = Auth::user()->username;
        $validatedData['user_id'] = Auth::id(); 

        //create a post
        CommunityPosts::create($validatedData);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(CommunityPosts $communityPosts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommunityPosts $communityPosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommunityPosts $communityPosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommunityPosts $communityPosts)
    {
        //
    }
}
