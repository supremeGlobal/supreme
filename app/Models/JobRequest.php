<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
	protected $guarded = [];

	public function job()
    {
        return $this->belongsTo(JobList::class, 'job_id')->withDefault();
    }
}