<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Media;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Company;
use App\Models\CompanyInfo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\HandlesImageUpload;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
	use HandlesImageUpload;

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

	public function addClient(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
		]);

		$path = null;

		if ($request->hasFile('image')) {
			$path = $this->uploadImage($request->image, 'clients/');
		}

		Client::create([
			'name' => $request->name,
			'image' => $path,
		]);
		return back()->with('success', 'Client add successfully!');
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
		$modelClass = "App\\Models\\{$request->model}";

		if (!class_exists($modelClass) || !($item = $modelClass::find($request->id))) {
			return response()->json(['message' => 'Table or column not found.'], 404);
		}

		$field = $request->field;
		$item->$field = $item->$field === 'active' ? 'inactive' : 'active';
		$item->save();

		return response()->json(['message' => 'Status updated successfully.']);
	}

	public function itemDelete($model, $id, $tab)
	{
		$modelClass = "App\\Models\\$model";

		if (!class_exists($modelClass) || !$item = $modelClass::find($id)) {
			return back()->with('danger', 'Table or column not found.');
		}

		if (Schema::hasColumn($item->getTable(), 'image') && $item->image && file_exists(public_path($item->image))) {
			unlink(public_path($item->image));
		}

		$item->delete();
		return back()->with('success', "$model deleted successfully")->withInput(['tab' => $tab]);
	}
}
