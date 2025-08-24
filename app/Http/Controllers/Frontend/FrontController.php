<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Content;
use App\Models\EmailUs;
use App\Models\GlobalPage;
use Illuminate\Http\Request;
use App\Mail\ClientAutoReply;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        return view('welcome');
    }	

	public function global()
    {
		$data['contents'] = Content::where('company_id', 1)->orderBy('order')->get();
        return view('frontend.pages.global', $data);
    }

	public function supremeTea()
    {
		$data['contents'] = Content::where('company_id', 2)->orderBy('order')->get();
        return view('frontend.pages.tea', $data);
    }

	public function autoBricks()
    {
		$data['contents'] = Content::where('company_id', 3)->orderBy('order')->get();
        return view('frontend.pages.auto-bricks', $data);
    }

	public function darKafaa()
    {
		$data['contents'] = Content::where('company_id', 4)->orderBy('order')->get();
        return view('frontend.pages.dar-kafaa', $data);
    }

	public function supremeAgro()
    {
		$data['contents'] = Content::where('company_id', 5)->orderBy('order')->get();
        return view('frontend.pages.agro', $data);
    }

	public function northPoint()
    {
		$data['contents'] = Content::where('company_id', 6)->orderBy('order')->get();
        return view('frontend.pages.north-point', $data);
    }

	public function gardenInn()
    {
		$data['contents'] = Content::where('company_id', 7)->orderBy('order')->get();
        return view('frontend.pages.garden-inn', $data);
    }

	public function alifCo()
    {
		$data['contents'] = Content::where('company_id', 8)->orderBy('order')->get();
        return view('frontend.pages.alif-co', $data);
    }

	// Email us	
	public function sendEmail(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|string',
			'mobile' => 'required|string',
			'subject' => 'required|string',
			'message' => 'required|string',
		]);

		// EmailUs::create([
		// 	'name' => $request->name,
		// 	'email' => $request->email,
		// 	'mobile' => $request->mobile,
		// 	'subject' => $request->subject,
		// 	'message' => $request->message
		// ]);

		EmailUs::create($request->only(['name', 'email', 'mobile', 'subject', 'message']));

		// Send client auto-reply (Markdown styled)
    	Mail::to($request->email)->send(new ClientAutoReply($request->all()));


		// return back()->with('success', 'Company email send successfully');
		    return back()->with('success', 'Your message has been sent. Please check your email for confirmation.');

	}

	public function job()
    {
        return view('frontend.pages.job');
    }
}