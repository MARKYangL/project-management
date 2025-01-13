<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'project_id' => 1, // Replace with actual project ID in Seeder
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'assigned_to' => $this->faker->name,
            'due_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['to_do', 'in_progress', 'done']),
        ];
    }
}
