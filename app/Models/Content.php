<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = [];

	public function contentCategory()
    {
        return $this->belongsTo(ContentCategory::class)->withDefault();
    }
}
