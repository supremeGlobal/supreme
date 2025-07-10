<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherInfoController extends Controller
{
	// All slider url
	function slider($name)
	{
		$companyMap = [
            'supreme-global'              => 1,
            'supreme-tea'                 => 2,
            'auto-bricks'                 => 3,
            'dar-kafaa-Al-Alia'           => 4,
            'supreme-agro'                => 5,
            'north-point-medical-college' => 6,
            'garden-inn-resort'           => 7,
            'alif-&-co'                   => 8
		];
		return $companyMap[$name];
	}

	public function dynamicSlider($company)
	{
		// $this->slider($company);
		return back();
	}

	public function supremeGlobalSliderAdd()
	{
		$data['info'] = Content::where('company_id', 1)->where('order', 1)->first();
		return view('admin.pages.global.index', $data);
	}

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
}
