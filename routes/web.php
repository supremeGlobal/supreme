<?php

use App\Mail\ClientAutoReply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SettingController;
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

/*	Tast list
	[edit/delete] category content not working
	[edit/delete] content not working
	
	Buttom part need route add 
	PageController(it can convert Setting controller), SettingController both should connect one controller
	Summernote not working sometime all option
	
	Optional: FrontController can add route code
	Frontend all code should add dynamic
	
	Email side should add file also, delete button problem and some design also

	All company sidebar connect url to route not web.php, it need sidebar.blade.php

	job section need one task...

*/

Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
	Route::controller(PageController::class)->group(function () {
		// Slider
		Route::get('{company}/slider', 'slider')->name('slider.index');
		Route::post('{company}/slider', 'storeSlider')->name('slider.store');
	
		// About us
		Route::get('{company}/about', 'about')->name('about.index');
		Route::post('{company}/about', 'updateAbout')->name('about.update');
	
		// Management-team
		Route::get('{company}/management-team', 'management')->name('management.index');
		Route::post('{company}/management-team', 'storeManagement')->name('management.store');
		Route::post('update-management/{id}', 'updateManagement')->name('management.update');
	
		// Content category
		Route::post('{company}/category', 'storeCategory')->name('category.store');
		
		// Content
		Route::get('{company}/content', 'content')->name('content.index');
		Route::post('{company}/content', 'storeContent')->name('content.store');
		Route::post('update-content/{id}', 'updateContent')->name('content.update');
	
		// Client
		Route::get('{company}/client', 'client')->name('client.index');
		Route::post('{company}/client', 'storeClient')->name('client.store');
	});

    Route::controller(SettingController::class)->group(function () {
		// Main dashboard
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');

		// Company-list
        Route::get('company-list', 'company')->name('company.index');

		// Company-information
        Route::get('company-info', 'companyInfo')->name('company-info.index');
        Route::post('add-info', 'storeCompanyInfo')->name('company-info.store');
        Route::post('update-info/{id}', 'updateCompanyInfo')->name('company-info.update');
		// All client
        Route::get('client-list', 'allClient')->name('all-client.index');
        Route::post('store-client', 'storeAllClient')->name('all-client.store');
		Route::post('update-all-client/{id}', 'updateAllClient')->name('all-client.update');
		
		// All new
        Route::get('news', 'news')->name('news.index');
        Route::post('add-news', 'storeNews')->name('news.store');
        Route::post('update-news/{id}', 'updateNews')->name('news.update');
		
		// Email-us
		Route::get('email-us', 'emailUs')->name('email-us.index');
		// Buttom request comes from frontend, so no need ['auth']
		Route::post('email-us', 'storeEmail')->withoutMiddleware(['auth'])->name('email-us.store');
		Route::post('email-seen/{id}', 'markAsSeen')->name('email-us.seen');
		
		// Common code
        Route::get('status', 'status')->name('status');
		Route::get('itemDelete/{model}/{id}', 'itemDelete')->name('itemDelete');
    });

	Route::controller(JobController::class)->group(function () {
		// Job
        Route::get('job-list', 'job')->name('job.index');
        Route::post('store-job', 'storeJob')->name('job.store');
		Route::post('update-all-client/{id}', 'updateAllClient')->name('all-client.update');		
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