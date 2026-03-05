<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'title' => 'First Task',
            'description' => 'This is your first todo task.',
            'completed' => false,
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Second Task',
            'description' => 'This is your second todo task.',
            'completed' => false,
            'priority' => 'medium',
        ]);
        Todo::create([
            'title' => 'High Priority Task',
            'description' => 'This is a high priority task.',
            'completed' => false,
            'priority' => 'high',
        ]);
    }
}
