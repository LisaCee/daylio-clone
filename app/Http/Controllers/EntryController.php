<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
            'activities.*' => 'exists:activities,id',
        ]);

        $entry = Auth::user()->entries()->create(Arr::except($data, 'activities'));
        $entry->activities()->sync($data['activities'] ?? []);
        return redirect('/');
    }

    public function update()
    {
    }
}
