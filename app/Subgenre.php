<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgenre extends Model
{
    protected $table = 'subgenres';
 
    protected $fillable = [
	    'name',
	];
 
    public $timestamps = true;

}

