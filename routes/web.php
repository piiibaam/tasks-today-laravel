<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/tasks', [PageController::class, 'tasks'])->name('tasks');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/profile/edit', [PageController::class, 'editProfile'])
    ->name('profile.edit');

Route::put('/profile', [PageController::class, 'updateProfile'])
    ->name('profile.update');