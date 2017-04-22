<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $table = "games";
    protected $fillable = [

        'winner',
        'loser'
    ];

    public static function expectedWinner(){

    }

    public static function win(){

    }

    public static function loss(){

    }

    public static function rank(){

    }
}
