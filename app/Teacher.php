<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps=false;
        protected $fillable = [
        'name', 'email', 'password',
    ];

}
