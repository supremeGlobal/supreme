<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Content;
use App\Models\GlobalPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

	public function job()
    {
        return view('frontend.pages.job');
    }
}