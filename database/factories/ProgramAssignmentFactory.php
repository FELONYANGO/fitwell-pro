<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Program;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgramAssignment>
 */
class ProgramAssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'client_id' => Client::inRandomOrder()->first()?->id ?? Client::factory(),
            'program_id' => Program::inRandomOrder()->first()?->id ?? Program::factory(),
            'start_date' => now()->subWeeks(fake()->numberBetween(1, 4)),
            'end_date' => now()->addWeeks(fake()->numberBetween(1, 4)),
            'progress' => fake()->randomFloat(2, 0, 100),
            'progress_percentage' => fake()->randomFloat(2, 0, 100),
            'status' => fake()->randomElement(['active', 'completed', 'paused']),
        ];
    }
}
