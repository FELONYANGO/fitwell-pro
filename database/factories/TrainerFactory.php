<?php

namespace Database\Factories;

use App\Models\User;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'user_id' => User::factory()->state(['role' => 'trainer']),
            'specialization' => fake()->randomElement(['Strength Training', 'Yoga', 'CrossFit', 'Nutrition']),
            'certification' => fake()->word(),
            'bio' => fake()->paragraph(),
            'availability' => json_encode(['monday' => ['9AM-5PM'], 'tuesday' => ['10AM-6PM']]),
            'experience_years' => fake()->numberBetween(1, 10),
            'gender' => fake()->randomElement(['male', 'female']),
            'hourly_rate' => fake()->randomFloat(2, 10, 100),
        ];
    }
}
