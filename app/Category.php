<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\Schema;

class Category extends Model
{
	protected $table='categories';
        protected $fillable=[
    	'title',

    ];

    public function food(){
    	return $this->hasMany('App\Food','categories_id','id'); //  moddhe foreign key thake r dan a id 


    }
}
