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

    //ELO - algorithm

    public static function expected($rA,$rB){
        return 1/(1+pow(10,($rB-$rA)/600));
    }

    public static function updateScore($score,$k = 24,$actual,$expected){
        return ROUND($score + $k*($actual - $expected));
    }
    public static function rank($score,$losses,$wins){
        if($wins!==0)
            return ROUND($score/(1+($losses/$wins)));
        else
            return ROUND($score/(1+($losses/0.1)));
    }
}
