<?php

namespace App\Providers;

use App\Models\Client;
use App\Models\Company;
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
		]);
	}
}
