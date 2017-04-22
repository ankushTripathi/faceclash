<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
       protected $table = "images";
    protected $fillable = [

        'name',
        'filename',
        'country',
        'score',
        'wins',
        'losses',
        'rank'
    ];

}
