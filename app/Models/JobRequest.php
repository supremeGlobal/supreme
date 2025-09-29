<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
	protected $guarded = [];

	public function jobInfo()
    {
        return $this->belongsTo(JobList::class)->withDefault();
    }
	
	public function company()
    {
        return $this->belongsTo(Company::class)->withDefault();
    }
}