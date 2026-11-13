@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <h1 class="page-title">Welcome!</h1>

    <p class="subtitle">
        Here are your tasks scheduled for today.
    </p>

    <h2 style="margin-bottom: 18px;">Today's Tasks</h2>

    @forelse ($tasks as $task)

        <div class="card">
            <div class="task-title">
                {{ $task->title }}
            </div>

            <span class="status {{ strtolower($task->status) == 'completed' ? 'completed' : '' }}">
                {{ $task->status }}
            </span>
        </div>

    @empty

        <div class="empty">
            No tasks scheduled for today. Enjoy your free time!
        </div>

    @endforelse

@endsection