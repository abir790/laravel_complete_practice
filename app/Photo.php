<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\User;
//use App\User;

class Photo extends Model
{
	protected $fillable=([
		'vname','user_id','location',

	]);



	public function user(){
		return $this->belongsTo(User::class);  // jekhane foreign key sekhanei belongsTo. other wise error dekhaba.
		//return $this->hasMany('App\User');
		//return $this->hasOne(User::class); // r non property mane foreign id ta nei bole other table er value show na kore error dekhsce.

	}
	public function Vdim(){
		return $this->belongsToMany('App\Vdim','photos_vedios','photo_id','vedio_id');
	}



}


