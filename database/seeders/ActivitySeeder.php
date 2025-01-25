<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            ['name' => 'Work'],
            ['name' => 'Study'],
            ['name' => 'Exercise'],
            ['name' => 'Good Meal'],
            ['name' => 'Friends'],
            ['name' => 'Family'],
            ['name' => 'Chores'],
            ['name' => 'Event'],
            ['name' => 'Travel'],
            ['name' => 'Rest'],
        ];

        foreach ($activities as $activity) {
            Activity::updateOrCreate(['name' => $activity['name']]);
        }
    }
}
