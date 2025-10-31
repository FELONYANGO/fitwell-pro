<?php

namespace Database\Factories;
  use App\Models\Client;
use App\Models\Program;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgressUpload>
 */
class ProgressUploadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


return [
    'client_id' => Client::factory(),
    'program_id' => Program::factory(),
    'type' => fake()->randomElement(['photo', 'video']),
    'file_path' => fake()->imageUrl(),
    'category' => fake()->randomElement(['form_check', 'progress', 'meal_prep', 'check_in', 'injury_assessment']),
    'week' => fake()->numberBetween(1, 12),
    'trainer_feedback' => fake()->sentence(),
    'rating' => fake()->numberBetween(1, 5),
    'approved' => fake()->boolean(),
];

    }
}
