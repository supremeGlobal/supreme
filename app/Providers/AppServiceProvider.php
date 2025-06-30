<?php

namespace App\Providers;

use App\Models\Client;
use App\Models\Company;
use App\Models\CompanyInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		//
	}

	public function boot(): void
	{
		View::share([
			'company' => Company::where('status', 'active')->orderBy('sort_order', 'asc')->get(),
			'client' => Client::where('status', 'active')->get(),
			'companyInfo' => CompanyInfo::where('status', 'active')->get()->pluck('value', 'key')->toArray(),
		]);
	}
}
