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
    public function job2()
    {
        $data['jobs'] = JobList::with('company')->where('status', 'active')->get();
        return view('frontend.pages.job2', $data);
    }

    public function show($id)
    {
        $job = JobList::with('company')->findOrFail($id);
        return response()->json($job);
    }

    public function apply(Request $request)
    {
        $validated = $request->validate([
            'job_id' => 'required|exists:job_lists,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile' => 'required|string|max:20',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('cv_uploads', 'public');
        }

        JobRequest::create([
            'job_id' => $validated['job_id'],
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'mobile' => $validated['mobile'],
            'file' => $path,
        ]);

        return response()->json(['success' => true, 'message' => 'Application submitted successfully!']);
    }
}