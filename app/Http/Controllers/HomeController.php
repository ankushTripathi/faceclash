<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class HomeController extends Controller{
    
    public function index(){
        return view('pages.home');
    }


}