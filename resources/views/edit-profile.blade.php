@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')

    <h1 class="page-title">Edit Profile</h1>

    <p class="subtitle">
        Update your personal account information.
    </p>

    <div class="card">

        <form action="{{ route('profile.update') }}" method="POST">

            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label>Full Name</label>
                <input
                    type="text"
                    name="full_name"
                    value="{{ old('full_name', $user->full_name) }}"
                    required
                    style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ddd; border-radius: 6px;"
                >
                @error('full_name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div style="margin-bottom: 20px;">
                <label>Username</label>
                <input
                    type="text"
                    name="username"
                    value="{{ old('username', $user->username) }}"
                    required
                    style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ddd; border-radius: 6px;"
                >
                @error('username')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div style="margin-bottom: 20px;">
                <label>Email Address</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $user->email) }}"
                    required
                    style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ddd; border-radius: 6px;"
                >
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                style="background: #29213f; color: white; padding: 12px 22px; border: none; border-radius: 6px; cursor: pointer;"
            >
                Save Changes
            </button>

            <a
                href="{{ route('profile') }}"
                style="margin-left: 12px; color: #666; text-decoration: none;"
            >
                Cancel
            </a>

        </form>

    </div>

@endsection