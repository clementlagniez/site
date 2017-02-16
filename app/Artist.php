<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';
 
    protected $fillable = [
        'name',
        'known_as',
        'lastname',
        'birth',
        'death',
    ];
 
    public $timestamps = true;

}

