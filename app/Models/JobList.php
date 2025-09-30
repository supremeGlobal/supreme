<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobList extends Model
{
	protected $guarded = [];

	public function company()
    {
        return $this->belongsTo(Company::class)->withDefault();
    }

    public function requests()
    {
        return $this->hasMany(JobRequest::class, 'job_id');
    }
}
