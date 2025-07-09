<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherInfoController extends Controller
{
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
