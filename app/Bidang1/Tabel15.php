<?php

namespace App\Bidang1;

use Illuminate\Database\Eloquent\Model;

class Tabel15 extends Model
{
    protected $fillable = ['tahun','nonpks','mabatik'];

    public function scopeThDescending($query)
	{
	    return $query->orderBy('tahun','asc');
	}
}
