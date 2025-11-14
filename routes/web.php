<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.welcome')->name('welcome');




Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::view('/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

require __DIR__.'/auth.php';
