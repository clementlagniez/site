<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $table = 'nationalities';
 
    protected $fillable = [
	    'name',
	];
 
    public $timestamps = true;

}



