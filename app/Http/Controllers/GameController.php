<?php

namespace App\Http\Controllers;

use App\Image as Image;
use App\Game as Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class GameController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }
    public function index(){
        
        $images = Image::orderBy(DB::raw('RAND()'))->take(2)->get();
        if(count($images)){
            $image1 = $images->first();
            $image2 = $images->last();
            $expected1 = Game::expected($image1->score,$image2->score);
            return view('pages.game',compact('images','expected1'));
        }
        else
        return redirect('images')->with('error','upload images first');
    }

    public function update(Request $req,$expected){
     
     $winId = $req->winner;
     $lossId =$req->looser;
     $winner = Image::where('id',$winId)->first();
     $looser = Image::where('id',$lossId)->first();

     $winner->wins += 1;
     $looser->losses += 1;

     $winnerExpected = $expected;
     $looserExpected = 1- $expected;

     $winner->score = Game::updateScore($winner->score,24,1,$winnerExpected);
     $looser->score = Game::updateScore($looser->score,24,0,$looserExpected);

     $winner->rank = Game::rank($winner->score,$winner->losses,$winner->wins);
     $looser->rank = Game::rank($looser->score,$looser->losses,$looser->wins);

     $winner->save();
     $looser->save();

     return redirect('game');


    }

}
