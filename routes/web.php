<?php

use App\Mail\ClientAutoReply;
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

		Route::post('send-email', 'sendEmail');

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
        Route::post('add-client', 'addClient');
		Route::post('update-client/{id}', 'updateClient');
		
        Route::get('news', 'news');
        Route::post('add-news', 'addNews');
        Route::post('update-news/{id}', 'updateNews');

		Route::get('email-us', 'emailUs');
		Route::post('/email-seen/{id}', 'markAsSeen');
		
		// Common code		
        Route::get('status', 'status')->name('status');
		Route::get('itemDelete/{model}/{id}', 'itemDelete')->name('itemDelete');
    });
});

Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::controller(OtherInfoController::class)->group(function () {
		// Slider
        Route::get('{company}/slider', 'sliderIndex');
        Route::post('{company}/slider/add', 'sliderAdd');
		
		// About us
		Route::get('{company}/about', 'aboutIndex');
        Route::post('{company}/about/update', 'aboutUpdate');		
		
		// Management-team
        Route::get('{company}/management-team', 'management');
        Route::post('{company}/management/add', 'managementAdd');
        Route::post('update-management/{id}', 'updateManagement');
		
		// Content
		Route::get('{company}/content', 'content');
        Route::post('{company}/content/add', 'addContent');
        Route::post('update-content/{id}', 'updateContent');

		// Content category
        Route::post('{company}/category/add', 'addCategory');

		// Client
		Route::get('{company}/client', 'companyClient');
		Route::post('{company}/client', 'addCompanyClient');
    });
});

Route::fallback(function () {
	return view('404');
});

// Cache:clear
Route::get('/clear', function() {
	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
	Artisan::call('route:clear');
	Artisan::call('optimize:clear'); 	    

	return 'Clear';
});