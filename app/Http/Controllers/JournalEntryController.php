<?php

namespace App\Http\Controllers;
use App\Models\JournalEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalEntryController extends Controller
{
    public function index()
    {
        $entries = JournalEntry::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')
                            ->get();
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

        $validatedData['user_id'] = Auth::id(); 
        JournalEntry::create($validatedData);
        return redirect('/Journal')->with('success', 'Journal entry saved!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $entry = JournalEntry::findOrFail($id);

        if ($entry->user_id !== Auth::id()) {
            return redirect('/Journal')->with('error', 'Unauthorized action.');
        }

        return view('MainPages.JournalEdit', compact('entry'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        $entry = JournalEntry::findOrFail($id);
        
        if ($entry->user_id !== Auth::id()) {
            return back()->with('error', 'Unauthorized action.');
        }
        
        $entry->update($validatedData);
        return redirect('/Journal')->with('success', 'Journal entry successfully updated!');
    }

    public function destroy(string $id)
    {
        $entry = JournalEntry::findOrFail($id);
        
        if ($entry->user_id !== Auth::id()) {
            return redirect('/Journal')->with('error', 'Unauthorized action.');
        }

        $entry->delete();
        return redirect('/Journal')->with('success', 'Journal entry successfully deleted.');
    }
}
