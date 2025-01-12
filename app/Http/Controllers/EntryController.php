<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function index()
    {
        $entries = auth()->user()->entries;

        return view('entry.index', ['entries' => $entries]);
    }

    public function create()
    {
        return view('entry.create');
    }

    public function store(Request $request)
    {
        $mood = $request->validate([
            'mood_level' => 'required',
        ]);

        Auth::user()->entries()->create($mood);
        return redirect('/');
    }

    public function update()
    {
    }
}
