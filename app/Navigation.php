<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
   protected $fillable = ['name','parent_id','icon','url','description'];
   //navigation has childs
   public function childs() {
           return $this->hasMany('App\Navigation','parent_id','id') ;
   }
}
