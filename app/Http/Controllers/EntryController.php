<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EntryController extends Controller
{
    public function index()
    {
        $entries = Auth::user()?->entries()->with('activities')->get() ?? [];

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
        Log::debug(response()->json(['message' => 'Entry created successfully', 'entry' => $entry->load('activities')]));

        return redirect('/');
    }

    public function update()
    {
    }
}
