@extends('layouts.app')

@section('title', 'About')

@section('content')

    <h1 class="page-title">About the System</h1>

    <p class="subtitle">
        Learn more about the Tasks for Today Management System.
    </p>

    <div class="card">

        <h2 style="margin-bottom: 15px;">
            Tasks for Today Management System
        </h2>

        <p style="line-height: 1.8; color: #666;">
            The Tasks for Today Management System is a simple
            task management application designed to help users
            organize and monitor their daily activities.
            It provides a Welcome page that displays tasks
            scheduled for the current day, a Task List page
            that shows all scheduled tasks, and a Profile page
            that displays user information.
        </p>

    </div>

    <div class="card">

        <h2 style="margin-bottom: 15px;">System Features</h2>

        <ul style="padding-left: 20px; line-height: 2; color: #666;">
            <li>View tasks scheduled for today.</li>
            <li>View all scheduled tasks.</li>
            <li>Monitor task completion status.</li>
            <li>View user profile information.</li>
            <li>Navigate through different system pages.</li>
        </ul>

    </div>

    <div class="card">

        <h2 style="margin-bottom: 15px;">Developer Information</h2>

        <p style="line-height: 1.8; color: #666;">
            <strong>Developer:</strong> Angela Michaela Pizarra
            <br>
            <strong>Program:</strong> BS Information Technology
            <br>
            <strong>Specialization:</strong> Animation and Game Development
        </p>

    </div>

@endsection