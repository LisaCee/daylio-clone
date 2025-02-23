<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            ['name' => 'Work', 'icon' => 'fas-briefcase'],
            ['name' => 'Study', 'icon' => 'fas-book'],
            ['name' => 'Exercise', 'icon' => 'fas-person-walking'],
            ['name' => 'Good Meal', 'icon' => 'fas-bowl-rice'],
            ['name' => 'Friends', 'icon' => 'fas-user-group'],
            ['name' => 'Family', 'icon' => 'fas-people-roof'],
            ['name' => 'Chores', 'icon' => 'fas-broom'],
            ['name' => 'Event', 'icon' => 'far-calendar-plus'],
            ['name' => 'Travel', 'icon' => 'fas-car'],
            ['name' => 'Rest', 'icon' => 'fas-bed'],
        ];

        foreach ($activities as $activity) {
            Activity::updateOrCreate(['name' => $activity['name'], 'icon' => $activity['icon']]);
        }
    }
}
