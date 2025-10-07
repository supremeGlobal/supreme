<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobList;
use App\Models\JobRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
	public function job()
	{
		$data['jobs'] = JobList::with('company')->get();
		return view('admin.job_portal.job', $data);
	}

	public function storeJob(Request $request)
	{
		$request->validate([
			'company_id' => 'required|exists:companies,id',
			'title' => 'required|string|unique:job_lists,title',
			'details' => 'required|string',
		]);

		JobList::create([
			'company_id' => $request->company_id,
			'title' => $request->title,
			'details' => $request->details
		]);

		return back()->with('success', 'Job created successfully');
	}

	public function updateJob(Request $request, $id)
	{
		$info = JobList::findOrFail($id);
		$info->update($request->all());

		return redirect()->back()->with('success', 'Job updated successfully');
	}

	public function jobRequest()
	{
		$data['jobRequest'] = JobRequest::with('job')->get();

		return view('admin.job_portal.job-request', $data);
	}

	public function jobList($jobId)
	{
		$data['job'] = JobList::with('requests')->findOrFail($jobId);
		return view('admin.job_portal.cvs', $data);
	}

	public function updateStatus(Request $request)
	{
		$cv = JobRequest::findOrFail($request->id);
		$cv->status = $request->status;
		$cv->save();

		return response()->json([
			'success' => true,
			'message' => 'Status updated to ' . ucfirst($cv->status)
		]);
	}

	// Frontend
	public function career()
	{
		$jobs = JobList::with('company')->where('status', 'active')->get();

		if ($jobs->isNotEmpty()) {
			// Redirect to the first active job
			return redirect()->route('jobs.show', $jobs->first()->id);
		}

		// fallback if no jobs
		return view('frontend.pages.career', compact('jobs'));
	}


	public function careerShow($id)
	{
		$jobs = JobList::with('company')->where('status', 'active')->get();
		$job = JobList::with('company')->findOrFail($id);
		return view('frontend.pages.career', compact('jobs', 'job'));
	}

	public function apply(Request $request)
	{
		$validated = $request->validate([
			'job_id' => 'required|exists:job_lists,id',
			'name' => 'required|string|max:255',
			'email' => 'nullable|email|max:255',
			'mobile' => 'required|string|max:20',
			'salary' => 'required|string|max:20',
			'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
		]);

		$path = $request->hasFile('file')
			? $request->file('file')->store('cv_uploads', 'public')
			: null;

		JobRequest::create([
			'job_id' => $validated['job_id'],
			'name' => $validated['name'],
			'email' => $validated['email'] ?? null,
			'mobile' => $validated['mobile'],
			'salary' => $validated['salary'],
			'file' => $path,
		]);

		return back()->with('success', 'Application submitted successfully');
	}
}
