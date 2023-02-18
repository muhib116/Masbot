<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/user/dashboard', function () {
    return Inertia::render('Backend/UserPanel/Dashboard');
})->name('user.dashboard');