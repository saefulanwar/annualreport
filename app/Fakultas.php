<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
