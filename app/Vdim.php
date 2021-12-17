<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vdim extends Model
{
	protected $table='vedios';
	public $timestamps=false;
	protected $fillable=([
		'vne','user_id','v_type','email_verified_at',

	]);

	public function user(){
	   return $this->belongsTo('App\User');
	}

	public function photos(){
		return $this->belongsToMany(Photo::class,'photos_vedios','vedio_id','photo_id');
	}

}
