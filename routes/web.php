<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/projects', [DashboardController::class, 'projects'])->name('projects');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/certificates', [DashboardController::class, 'certificates'])->name('certificates');
Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');