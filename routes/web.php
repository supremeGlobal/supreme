<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Admin\OtherInfoController;

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

        Route::get('company', 'company');
		
        Route::get('company-info', 'companyInfo');
        Route::post('add-info', 'addInfo');
		
        Route::get('client', 'client');
		
        Route::get('news', 'news');
        Route::post('add-news', 'addNews');

		// Common code
        Route::get('status', 'status')->name('status');
    });
});

Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::controller(OtherInfoController::class)->group(function () {

		// Route::get('{company}/slider', [OtherInfoController::class, 'dynamicSlider']);
        Route::get('{company}/slider', 'dynamicSlider');

		// Route::post('supreme-global/slider/add', 'supremeGlobalSliderAdd');
		
        Route::get('supreme-global/about', 'supremeGlobalAbout');
        Route::post('supreme-global/about/update', 'supremeGlobalAboutUpdate');
		
        Route::get('supreme-global/division', 'supremeGlobalDivision');
    });
});

Route::fallback(function () {
   return view('404');
});

// Cache:clear
Route::get('/clear', function() {
    Artisan::call('optimize:clear');    
    return "Cleared!";
});
