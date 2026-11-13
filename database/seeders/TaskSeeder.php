<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Mika',
            'username' => 'piibam',
            'full_name' => 'Angela Michaela Pizarra',
            'email' => 'akim@example.com',
            'password' => Hash::make('password123'),
        ]);

        $tasks = [
            [
                'title' => 'Complete Laravel Activity',
                'status' => 'Pending',
                'task_date' => today(),
            ],
            [
                'title' => 'Review Networking Notes',
                'status' => 'Completed',
                'task_date' => today(),
            ],
            [
                'title' => 'Prepare Project Documentation',
                'status' => 'Pending',
                'task_date' => today(),
            ],
            [
                'title' => 'Study PHP and MySQL',
                'status' => 'Pending',
                'task_date' => today()->addDay(),
            ],
            [
                'title' => 'Submit Programming Assignment',
                'status' => 'Completed',
                'task_date' => today()->addDay(),
            ],
            [
                'title' => 'Review Previous Lessons',
                'status' => 'Pending',
                'task_date' => today()->subDay(),
            ],
            [
                'title' => 'Organize School Requirements',
                'status' => 'Completed',
                'task_date' => today()->subDays(2),
            ],
            [
                'title' => 'Plan Weekly Activities',
                'status' => 'Pending',
                'task_date' => today()->addDays(2),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}