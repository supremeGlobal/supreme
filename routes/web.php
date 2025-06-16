<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\FrontController;

Auth::routes();

Route::middleware(['web'])->group(function () {
	Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'home');
		
        Route::get('/global', 'global');		
        Route::get('/supreme-tea', 'supremeTea');		
        Route::get('/auto-bricks', 'autoBricks');
        Route::get('/dar-kafaa', 'darKafaa');
        Route::get('/supreme-agro', 'supremeAgro');

        Route::get('/north-point', 'northPoint');
        Route::get('/garden-inn', 'gardenInn');
        Route::get('/alif-co', 'alifCo');

        Route::get('/job', 'job');
    });
});

Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('slider', 'slider')->name('admin.slider');
    });
});

Route::fallback(function () {
   return view('404');
});

/*
| Frontend Routes (No Login Required)

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