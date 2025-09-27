<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function job()
	{
		$data['jobs'] = JobList::all();
		return view('admin.settings.job', $data);
	}

	public function storeJob(Request $request)
	{
		$request->validate([
			'company_id' => 'required|exists:companies,id',
			'name' => 'required|string|unique:job_lists,name',
			'details' => 'required|string',
		]);

		JobList::create([
			'company_id' => $request->company_id,
			'name' => $request->name,
			'details' => $request->details
		]);

		return back()->with('success', 'Job created successfully');
	}

	public function updateCompanyInfo(Request $request, $id)
	{
		$info = JobList::findOrFail($id);
		$info->update($request->all());

		return redirect()->back()->with('success', 'Company info updated successfully');
	}
}
