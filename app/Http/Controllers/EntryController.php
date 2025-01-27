<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function index()
    {
        $entries = auth()->user()->entries ?? [];

        return view('entry.index', ['entries' => $entries]);
    }

    public function create()
    {
        $all_activities = Activity::all();
        return view('entry.create', ['activities' => $all_activities]);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'mood_level' => 'required',
            'activities' => 'nullable|array',
        ]);

        Auth::user()->entries()->create($data);
        return redirect('/');
    }

    public function update()
    {
    }
}
