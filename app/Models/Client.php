<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $guarded = [];

	public function companies()
	{
		return $this->belongsToMany(Company::class, 'company_clients');
	}
}
