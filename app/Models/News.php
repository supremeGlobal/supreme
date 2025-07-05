<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $guarded = [];
	
	public function company()
    {
        return $this->belongsTo(Company::class, 'company_id')->withDefault();
    }
}
