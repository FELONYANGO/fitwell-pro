<?php

namespace Database\Factories;

use App\Models\Trainer;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'trainer_id' => Trainer::factory(),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'type' => fake()->randomElement(['fitness', 'nutrition', 'hybrid']),
            'duration_weeks' => fake()->numberBetween(4, 12),
            'level' => fake()->randomElement(['beginner', 'intermediate', 'advanced']),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
        ];
    }
}
