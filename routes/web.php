<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController; // ← pakai controller langsung

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing.index');

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
