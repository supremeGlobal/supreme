<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Media;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

	public function company()
	{
		$data['company'] = Company::all();
		return view('admin.pages.company', $data);
	}

	// Common code
	public function status(Request $request)
	{
		$model = $request->model;
		$field = $request->field;
		$id = $request->id;
		$tab = $request->tab;

		$itemId = DB::table($model)->find($id);
		($itemId->$field == 'active') ? $action = $itemId->$field = 'inactive' : $action = $itemId->$field = 'active';
		DB::table($model)->where('id', $id)->update([$field => $action]);
		return response()->json(['message' => 'Status updated successfully.']);
	}
}
