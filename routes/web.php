<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'dashboard')->name('admin.dashboard');
    });
});



/*
| Frontend Routes (No Login Required)
Route::middleware(['web'])->group(function () {
    Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
    Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
    // Add more public pages
});

| Admin Routes (Login Required)
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    // Add more admin routes
});

// Frontend routes (no login)
Route::prefix('/')->middleware(['web'])->group(function () {
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'home')->name('frontend.home');
        Route::get('/about', 'about')->name('frontend.about');
    });
});

// Admin routes (login required)
Route::prefix('admin')->middleware(['web', 'auth'])->name('admin.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/users', 'users')->name('users');
    });
});
*/