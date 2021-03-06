<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'characters';
 
    protected $fillable = [
	    'name',
	    'known_as',
	    'lastname',
	    'age',
	    'book_id',
    ];
 
    public $timestamps = true;

}

