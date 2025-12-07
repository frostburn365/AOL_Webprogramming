<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JournalEntry;

class JournalEntryController extends Controller
{
    public function index()
    {
        $entries = JournalEntry::orderBy('created_at', 'desc')->get();
        return view('MainPages.Journal', compact('entries'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        ]);

        JournalEntry::create($validatedData);

        return redirect('/Journal')->with('success', 'Journal entry saved!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
