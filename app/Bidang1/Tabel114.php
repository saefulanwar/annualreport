<?php

namespace App\Bidang1;

use Illuminate\Database\Eloquent\Model;

class Tabel114 extends Model
{
    protected $fillable = ['tahun','jumlah','dana','peminat','didanai','terselesaikan'];

    public function scopeThDescending($query)
	{
	    return $query->orderBy('tahun','asc');
	}
}
