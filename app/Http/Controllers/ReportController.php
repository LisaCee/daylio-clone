<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function weeklyMoodReport()
    {
        $report = Entry::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->selectRaw('DATE(created_at) as date, AVG(mood_level) as average_mood_level')->groupBy('date')->orderBy('date')->get()->first();

        if ($report) {
            $report->average_mood_level = round($report->average_mood_level, 1);
        }
        $report = response()->json($report);

        return view('report.weekly', ['report' => $report]);
    }
}
