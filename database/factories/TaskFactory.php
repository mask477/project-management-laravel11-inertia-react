<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->realText(),
            'due_date' => fake()->dateTime(),
            'status' => fake()->randomElement([
                'pending',
                'in-progress',
                'completed'
            ]),
            'priority' => fake()->randomElement([
                'low',
                'medium',
                'high'
            ]),
            'assigned_to' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ];
    }
}
