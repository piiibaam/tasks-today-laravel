@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    <h1 class="page-title">My Profile</h1>

    <p class="subtitle">
        View your personal account information.
    </p>

    @if ($user)

        <div class="card">

            <h2 style="margin-bottom: 20px;">User Information</h2>
    @if (session('success'))
            <p style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </p>
    @endif

        <a href="{{ route('profile.edit') }}"
        style="display: inline-block; background: #29213f; color: white; padding: 10px 18px; border-radius: 6px; text-decoration: none; margin-bottom: 20px;">
            Edit Profile
        </a>
        
            <p style="margin-bottom: 15px;">
                <strong>Full Name:</strong>
                {{ $user->full_name }}
            </p>

            <p style="margin-bottom: 15px;">
                <strong>Username:</strong>
                {{ $user->username }}
            </p>

            <p style="margin-bottom: 15px;">
                <strong>Email:</strong>
                {{ $user->email }}
            </p>

        </div>

    @else

        <div class="empty">
            No user profile found.
        </div>

    @endif

@endsection