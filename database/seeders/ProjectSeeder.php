<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Task;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory(3)->create()->each(function ($project) {
            Task::factory(2)->create(['project_id' => $project->id]);
        });
    }
}
