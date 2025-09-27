<?php

namespace App\Providers;

use App\Models\News;
use App\Models\Client;
use App\Models\Company;
use App\Models\CompanyInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		//
	}

	public function boot(): void
	{
		try {			
			View::share([
				'company' => Company::where('status', 'active')->orderBy('sort_order', 'asc')->get(),
				'client' => Client::where('status', 'active')->get(),
				'companyInfo' => CompanyInfo::where('status', 'active')->get()->mapWithKeys(fn($item) => [$item->key => $item->value !== '' ? $item->value : true])->toArray(),
				'news' => News::where('status', 'active')->get(),
			]);			
		} catch (\Exception $e) {
			
		}

		Schema::defaultStringLength(191);
	}
}
