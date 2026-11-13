<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Welcome page - Today's tasks only
    public function home()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('tasks'));
    }

    // Task List page - All tasks
    public function tasks()
    {
        $tasks = Task::orderBy('task_date', 'desc')->get();

        return view('tasks', compact('tasks'));
    }

    // Profile page
    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }

    // About page
    public function about()
    {
        return view('about');
    }

        // Display Edit Profile page
    public function editProfile()
    {
        $user = User::first();

        return view('edit-profile', compact('user'));
    }

        // Save updated profile information
    public function updateProfile(Request $request)
    {
        $user = User::first();

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $validated['full_name'],
            'full_name' => $validated['full_name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
        ]);

        return redirect()->route('profile')
            ->with('success', 'Profile updated successfully!');
    }
}