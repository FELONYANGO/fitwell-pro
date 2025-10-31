<?php

namespace Database\Factories;
        use App\Models\Client;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measurement>
 */
class MeasurementFactory extends Factory
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
    'weight' => fake()->randomFloat(2, 50, 100),
    'body_fat' => fake()->randomFloat(2, 10, 25),
    'chest' => fake()->randomFloat(2, 80, 120),
    'waist' => fake()->randomFloat(2, 70, 100),
    'hips' => fake()->randomFloat(2, 80, 110),
    'date' => fake()->date(),
];

    }
}
