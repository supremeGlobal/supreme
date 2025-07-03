<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Media;
use App\Models\Client;
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
			'key' => 'required|string|unique:company_infos,key',
			'value' => 'required|string',
		]);

		CompanyInfo::create([
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
