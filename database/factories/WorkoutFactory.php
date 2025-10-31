<?php

namespace Database\Factories;

use App\Models\Program;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workout>
 */
class WorkoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'program_id' => Program::factory(),
            'title' => fake()->sentence(2),
            'description' => fake()->paragraph(),
            'video_link' => fake()->url(),
            'day_number' => fake()->numberBetween(1, 7),
        ];
    }
}
