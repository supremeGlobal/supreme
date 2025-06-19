<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
	{
		$data['types'] = [
			[
				'link'  => url('title-1'), // route('auth'),
				'value' => User::count(),
				'title' => 'Admin title 1'
			],
		];
		return view('admin.dashboard', $data);
	}

	public function slider(){

		$data['company'] = User::$company;

		
	
		$data['sliders'] = Media::where('type', 'slider')->get();
		return view('admin.pages.slider', $data);
	}
}
