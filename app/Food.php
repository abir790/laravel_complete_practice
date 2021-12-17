<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
	protected $table='foods';
    protected $fillable=[
    	'name',

    ];

	public function category(){
	   return $this->belongsTo('App\Category','categories_id','id');//  moddhe foreign key thake r dan a id 
	}

}
