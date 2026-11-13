@extends('layouts.app')

@section('title', 'Task List')

@section('content')

    <h1 class="page-title">Task List</h1>

    <p class="subtitle">
        View all your scheduled tasks and their current status.
    </p>

    @forelse ($tasks as $task)

        <div class="card">
            <div class="task-title">
                {{ $task->title }}
            </div>

            <p style="color: #777; margin-bottom: 12px;">
                Date: {{ $task->task_date->format('F d, Y') }}
            </p>

            <span class="status {{ strtolower($task->status) == 'completed' ? 'completed' : '' }}">
                {{ $task->status }}
            </span>
        </div>

    @empty

        <div class="empty">
            No tasks available.
        </div>

    @endforelse

@endsection