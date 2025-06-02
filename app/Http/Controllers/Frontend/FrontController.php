<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

	public function tea()
    {
        return view('frontend.pages.tea');
    }

	public function autoBricks()
    {
        return view('frontend.pages.auto-bricks');
    }	
}