<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $table = 'bands';
 
    protected $fillable = [
        'name',
	    'formed',
    ];
 
    public $timestamps = true;

}

