<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Company;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Models\ManagementTeam;
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

	public function sliderAdd(Request $request, $company)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
		]);

		if ($request->hasFile('image')) {
			$path = $this->uploadImage($request->image, 'slider/' . $company);

			Slider::create([
				'company_id' => $request->companyId,
				'image' => $path,
			]);
		}
		return back()->with('success', 'Image uploaded successfully!');
	}

	// About us
	public function aboutIndex($company)
	{
		$companyId = $this->companyMap[$company] ?? null;
		if (!$companyId) {
			return view('404');
		}

		$data['company'] = $company;
		$data['companyId'] = $companyId;

		$data['about'] = AboutUs::where('company_id', $companyId)->first();
		return view('admin.pages.global.about-us', $data);
	}

	public function aboutUpdate(Request $request)
	{
		AboutUs::updateOrCreate(
			['company_id' => $request->companyId],
			[
				'details' => $request->details
			]
		);

		return redirect()->back()->with('success', 'About us update successfully!');
	}

	// Mission vision
	public function mission($company)
	{
		$companyId = $this->companyMap[$company] ?? null;
		if (!$companyId) {
			return view('404');
		}

		$data['company'] = $company;
		$data['companyId'] = $companyId;

		$data['missionVision'] = MissionVision::where('company_id', $companyId)->get();
		return view('admin.pages.global.mission-vision', $data);
	}

	public function missionAdd(Request $request, $company)
	{
		$request->validate([
			'title' => 'required',
			'details' => 'required',
			'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
		]);

		if ($request->hasFile('image')) {
			$path = $this->uploadImage($request->image, 'mission/' . $company);

			MissionVision::create([
				'company_id' => $request->companyId,
				'title' => $request->title,
				'details' => $request->details,
				'image' => $path,
			]);
		}
		return back()->with('success', 'Mission or vision add successfully!');
	}

	public function updateMission(Request $request, $id)
	{
		$mission = MissionVision::findOrFail($id);

		$mission->title   = $request->title;
		$mission->details = $request->details;

		// Handle image only if a new one is uploaded
		if ($request->hasFile('image')) {
			// Remove old image if exists
			if ($mission->image && file_exists(public_path($mission->image))) {
				unlink(public_path($mission->image));
			}

			// Upload new image
			$path = $this->uploadImage($request->image, 'mission/' . $request->company);

			// Save new path
			$mission->image = $path;
		}
		$mission->save();

		return redirect()->back()->with('success', 'Mission or vision updated successfully!');
	}

	public function supremeGlobalDivision()
	{
		$data['info'] = Content::where('company_id', 1)->where('order', 2)->get();
		return view('admin.pages.global.division', $data);
	}

	// Management team
	public function management($company)
	{
		$companyId = $this->companyMap[$company] ?? null;
		if (!$companyId) {
			return view('404');
		}

		$data['company'] = $company;
		$data['companyId'] = $companyId;

		$data['managementTeam'] = ManagementTeam::where('company_id', $companyId)->get();
		return view('admin.pages.global.management-team', $data);
	}	

	public function managementAdd(Request $request, $company)
	{
		$request->validate([
			'details' => 'required',
			'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
		]);

		if ($request->hasFile('image')) {
			$path = $this->uploadImage($request->image, 'management-team/' . $company);

			ManagementTeam::create([
				'company_id' => $request->companyId,
				'details' => $request->details,
				'image' => $path,
			]);
		}
		return back()->with('success', 'Management team add successfully!');
	}
	
	public function updateManagement(Request $request, $id)
	{
		$management = ManagementTeam::findOrFail($id);

		$management->details = $request->details;

		// Handle image only if a new one is uploaded
		if ($request->hasFile('image')) {
			// Remove old image if exists
			if ($management->image && file_exists(public_path($management->image))) {
				unlink(public_path($management->image));
			}

			// Upload new image
			$path = $this->uploadImage($request->image, 'management-team/' . $request->company);

			// Save new path
			$management->image = $path;
		}
		$management->save();

		return redirect()->back()->with('success', 'Management updated successfully!');
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
