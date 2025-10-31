<?php

namespace Database\Factories;

use App\Models\Workout;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'workout_id' => Workout::factory(),
            'name' => fake()->word(),
            'body_part' => fake()->randomElement(['legs', 'arms', 'chest', 'back', 'core']),
            'sets' => fake()->numberBetween(3, 5),
            'reps' => fake()->numberBetween(8, 15),
            'duration' => fake()->randomElement(['30s', '45s', '60s']),
            'rest_period' => fake()->randomElement(['30s', '60s']),
            'notes' => fake()->sentence(),
            'video_url' => fake()->url(),
        ];
    }
}
