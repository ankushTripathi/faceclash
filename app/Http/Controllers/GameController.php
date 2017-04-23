<?php

namespace App\Http\Controllers;

use App\Image as Image;
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
            return view('pages.game',compact('images'));
        }
        else
        return redirect('images')->with('error','upload images first');
    }

    public function update(){
        
    }

}
