<?php

namespace App\Bidang1;

use Illuminate\Database\Eloquent\Model;

class Mabareg extends Model
{
    protected $fillable = [
    'tahun','d3','s1','s2','s3'
    ];

    public function scopeThDescending($query)
	{
	    return $query->orderBy('tahun','asc');
	}
}
