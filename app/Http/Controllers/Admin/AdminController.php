<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Media;
use App\Models\Client;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Company;
use App\Models\Content;
use App\Models\EmailUs;
use App\Models\CompanyInfo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyClient;
use App\Models\ManagementTeam;
use App\Models\ContentCategory;
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
		// Company-wise stats
		$companies = config('company_map');
		$companyData = [];

		foreach ($companies as $slug => $companyId) {
			$companyData[$slug] = [
				'name'  => ucwords(str_replace('-', ' ', $slug)),
				'slug'  => $slug,
				'types' => [
					[
						'link'  => route('slider.index', $slug),
						'value' => Slider::where('company_id', $companyId)->count(),
						'title' => 'Total slider',
					],
					[
						'link'  => route('about.index', $slug),
						'value' => AboutUs::where('company_id', $companyId)->count(),
						'title' => 'About us',
					],
					[
						'link'  => route('management.index', $slug),
						'value' => ManagementTeam::where('company_id', $companyId)->count(),
						'title' => 'Total Management team',
					],
					[
						'link'  => route('content.index', $slug),
						'value' => ContentCategory::where('company_id', $companyId)->count(),
						'title' => 'Total content category',
					],
					[
						'link'  => route('content.index', $slug),
						'value' => Content::where('company_id', $companyId)->count(),
						'title' => 'Total content',
					],
					[
						'link'  => route('client.index', $slug),
						'value' => CompanyClient::where('company_id', $companyId)->count(),
						'title' => 'My client',
					],
				]
			];
		}

		$data['companies'] = $companyData;

		$data['settings'] = [
			['link'  => url('admin/company'), 'value' => Company::count(), 'title' => 'Total Group Entities'],
			['link'  => url('admin/company-info'), 'value' => CompanyInfo::count(), 'title' => 'Company\'s Information'],
			['link'  => url('admin/client'), 'value' => Client::count(), 'title' => 'Total Client'],
			['link'  => url('admin/news'), 'value' => News::count(), 'title' => 'Total news'],
			['link'  => url('admin/email-us'), 'value' => EmailUs::count(), 'title' => 'Total email']
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

	public function updateInfo(Request $request, $id)
	{
		$info = CompanyInfo::findOrFail($id);
		$info->update($request->all());

		return redirect()->back()->with('success', 'Company info updated successfully!');
	}

	// Client section
	public function client()
	{
		$data['clients'] = Client::all();
		return view('admin.pages.clients', $data);
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

	public function updateClient(Request $request, $id)
	{
		$client = Client::findOrFail($id);

		$request->validate([
			'name' => 'required|string|max:255',
			'image' => 'nullable|image|max:2048',
		]);

		$client->name = $request->name;

		if ($request->hasFile('image')) {
			if ($client->image && file_exists(public_path($client->image))) {
				unlink(public_path($client->image));
			}

			// Upload new image via your helper
			$path = $this->uploadImage($request->image, 'clients/');
			$client->image = $path;
		}

		$client->save();

		return redirect()->back()->with('success', 'Client updated successfully.');
	}

	// News section
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

	public function updateNews(Request $request, $id)
	{
		$news = News::findOrFail($id);
		$news->update($request->all());

		return redirect()->back()->with('success', 'News updated successfully!');
	}

	// Email us
	public function emailUs()
	{
		$data['emailUs'] = EmailUs::all();
		return view('admin.pages.email-us', $data);
	}

	public function markAsSeen($id)
	{
		$email = EmailUs::findOrFail($id);
		if ($email->status === 'unseen') {
			$email->status = 'seen';
			$email->save();
		}
		return response()->json(['success' => true]);
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

		return response()->json(['message' => 'Status updated successfully']);
	}

	public function itemDelete($model, $id)
	{
		$modelClass = "App\\Models\\$model";

		if (!class_exists($modelClass) || !$item = $modelClass::find($id)) {
			return back()->with('danger', 'Table or column not found.');
		}

		if (Schema::hasColumn($item->getTable(), 'image') && $item->image && file_exists(public_path($item->image))) {
			unlink(public_path($item->image));
		}

		$item->delete();
		return back()->with('success', "$model deleted successfully");
	}
}
