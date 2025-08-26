<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Slider;
use App\Models\Company;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Traits\HandlesImageUpload;
use App\Http\Controllers\Controller;

class OtherInfoController extends Controller
{
	use HandlesImageUpload;

	protected $companyMap;
	public function __construct()
	{
		$this->companyMap = config('company_map');
	}

	// Slider
	public function sliderIndex($company)
	{
		$companyId = $this->companyMap[$company] ?? null;
		if (!$companyId) {
			return view('404');
		}

		$data['company'] = $company;
		$data['companyId'] = $companyId;

		$data['slider'] = Slider::where('company_id', $companyId)->get();
		return view('admin.pages.global.slider', $data);
	}

	public function sliderAdd(Request $request)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
		]);

		if ($request->hasFile('image')) {
			$path = $this->uploadImage($request->image, 'slider/' . $request->company);

			Slider::create([
				'company_id' => $request->companyId,
				'image' => $path,
			]);
		}
		return back()->with('success', 'Image uploaded successfully!');
	}

	// About us
	public function supremeGlobalAbout()
	{
		$data['info'] = Content::where('company_id', 1)->where('order', 1)->first();
		return view('admin.pages.global.index', $data);
	}

	public function supremeGlobalAboutUpdate(Request $request)
	{
		Content::where('id', $request->id)->update([
			'details' => $request->details
		]);
		return redirect()->back()->with('success', 'About us updated successfully!');
	}

	public function supremeGlobalDivision()
	{
		$data['info'] = Content::where('company_id', 1)->where('order', 2)->get();
		return view('admin.pages.global.division', $data);
	}

	// Show clients page for given company slug
	public function companyClient($company)
	{
		$data['company'] = $company;

		$companyId = $this->companyMap[$company] ?? null;
		if (!$companyId) {
			return view('404');
		}

		// get clients for this company
		$data['companyClients'] = $companyClients = Company::findOrFail($companyId)->clients;

		// clients not yet assigned to this company
		$data['otherClients'] = Client::whereNotIn('id', $companyClients->pluck('id'))->get();

		return view('admin.pages.global.my-client', $data);
	}

	// Add client to company
	public function addCompanyClient(Request $request, $company)
	{
		$companyId = $this->companyMap[$company] ?? null;
		if (!$companyId) {
			return view('404');
		}

		$request->validate([
			'client_id' => 'required|exists:clients,id',
		]);

		$company = Company::findOrFail($companyId);

		// Attach client, avoid duplicates by checking first
		if (!$company->clients()->where('clients.id', $request->client_id)->exists()) {
			$company->clients()->attach($request->client_id);
		}

		return back()->with('success', 'Client added successfully.');
	}
}
