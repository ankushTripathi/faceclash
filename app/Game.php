<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image as Image;
use Illuminate\Support\Facades\DB as DB;

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
        if(!($losses == 0 ))
            return ROUND($score/(1+($wins/$losses)));
        else
            return ROUND($score/(1+($wins/0.1)));
    }
}
