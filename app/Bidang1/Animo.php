<?php

namespace App\Bidang1;

use Illuminate\Database\Eloquent\Model;

class Animo extends Model
{
    protected $fillable = [
    'tahun','d3','s1','s2','s3'
    ];

    public function dateFormatted(){
    	$format = "d/m/Y";
    	
    	return $this->created_at->format($format);
    }
}
