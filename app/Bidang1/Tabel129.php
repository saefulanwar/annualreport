<?php

namespace App\Bidang1;

use Illuminate\Database\Eloquent\Model;

class Tabel129 extends Model
{
    protected $fillable = ['kegiatan','waktu','pembicara','tempat','user_id'];

    public function user()
	{
		return $this->belongsTo('App\User');
	}
}
