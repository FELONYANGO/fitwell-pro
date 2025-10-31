<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Program;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientProgram>
 */
class ClientProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


return [
    'user_id' => User::factory()->state(['role' => 'client']),
    'program_id' => Program::factory(),
    'progress' => fake()->numberBetween(0, 100),
    'status' => fake()->randomElement(['active', 'completed', 'paused']),
];

    }
}
