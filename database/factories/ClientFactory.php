<?php

namespace Database\Factories;
        use App\Models\User;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
    'height' => fake()->randomFloat(2, 150, 200),
    'weight' => fake()->randomFloat(2, 50, 100),
    'fitness_goal' => fake()->sentence(),
    'gender' => fake()->randomElement(['male', 'female']),
    'age' => fake()->numberBetween(18, 50),
    'fitness_level' => fake()->randomElement(['beginner', 'intermediate', 'advanced']),
    'activity_level' => fake()->randomElement(['low', 'medium', 'high']),
];

    }
}
