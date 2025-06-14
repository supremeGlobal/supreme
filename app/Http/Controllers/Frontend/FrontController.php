<?php

namespace App\Http\Controllers\Frontend;

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
		$data['global'] = GlobalPage::first();
        return view('frontend.pages.global', $data);
    }

	public function tea()
    {
        return view('frontend.pages.tea');
    }

	public function autoBricks()
    {
        return view('frontend.pages.auto-bricks');
    }	

	public function job()
    {
        return view('frontend.pages.job');
    }
}