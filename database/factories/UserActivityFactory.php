<?php

namespace Database\Factories;

use App\Models\UserActivity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UserActivityFactory extends Factory
{
    protected $model = UserActivity::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
