<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Media;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Company;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	// Dashboard
	public function dashboard()
	{
		$data['types'] = [
			[
				'link'  => url('admin/company'),
				'value' => Company::count(),
				'title' => 'Total Group Entities'
			],
			[
				'link'  => url('admin/company-info'),
				'value' => CompanyInfo::count(),
				'title' => 'Company Basic Information'
			],
			[
				'link'  => url('admin/client'),
				'value' => Client::count(),
				'title' => 'Total Client'
			],
			[
				'link'  => url('admin/news'),
				'value' => News::count(),
				'title' => 'Total news'
			],
			[
				'link'  => '',
				'value' => Slider::count(),
				'title' => 'Total slider image'
			],
		];
		return view('admin.dashboard', $data);
	}

	// Company
	public function company()
	{
		$data['company'] = Company::all();
		return view('admin.pages.company', $data);
	}

	// Company-info
	public function companyInfo()
	{
		$data['companyInfo'] = CompanyInfo::all();
		return view('admin.pages.company-info', $data);
	}

	public function addInfo(Request $request)
	{
		$request->validate([
			'company_id' => 'required|exists:companies,id',
			'key' => 'required|string|unique:company_infos,key',
			'value' => 'required|string',
		]);

		CompanyInfo::create([
			'company_id' => $request->company_id,
			'key' => $request->key,
			'value' => $request->value
		]);

		return back()->with('success', 'Company information add successfully');
	}

	// Client
	public function client()
	{
		$data['client'] = Client::all();
		return view('admin.pages.client', $data);
	}

	// News
	public function news()
	{
		$data['news'] = News::all();
		return view('admin.pages.news', $data);
	}

	public function addNews(Request $request)
	{
		$request->validate([
			'company_id' => 'required|exists:companies,id',
			'subject' => 'required|string',
			'details' => 'required|string',
		]);

		News::create([
			'company_id' => $request->company_id,
			'subject' => $request->subject,
			'details' => $request->details
		]);

		return back()->with('success', 'Company news add successfully');
	}

	// Common code
	public function status(Request $request)
	{
		$model = $request->model;
		$field = $request->field;
		$id = $request->id;
		$tab = $request->tab;

		$itemId = DB::table($model)->find($id);
		($itemId->$field == 'active') ? $action = $itemId->$field = 'inactive' : $action = $itemId->$field = 'active';
		DB::table($model)->where('id', $id)->update([$field => $action]);
		return response()->json(['message' => 'Status updated successfully.']);
	}
}
