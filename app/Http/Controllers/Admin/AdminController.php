<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
