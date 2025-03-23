<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Entry;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'mood_level' => $this->faker->numberBetween(0, 4),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Entry $entry) {
            $activityIds = Activity::pluck('id');
            $randomActivities = $activityIds->random(rand(0, 5));
            $entry->activities()->attach($randomActivities);
        });
    }
}
