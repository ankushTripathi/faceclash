<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image as Image;

class ImageController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){

        $images = Image::all();
        return view('pages.upload',compact('images'));

    }

    public function store(){
        $path = 'img/models';
        if(is_dir($path))
        {
            if(($dh = opendir($path)))
            {
                while(($file = readdir($dh))!== FALSE)
                {
                    if(!($file === '.'|| $file === '..'))
                    {
                        $ext = pathinfo($file,PATHINFO_EXTENSION);
                        $allowed = ['jpg','png'];
                        if(in_array($ext,$allowed))
                        {
                            $title = str_slug(basename($file,'.'.$ext));
                            $filename = $file;
                            $image = Image::where('filename',$filename)->get();
                            if(count($image)===0)
                            {
                                Image::create([

                                    'name' => $title,
                                    'filename' => $filename

                                ]);
                            }
                            else
                                continue;
                        }

                    }
                }
                //complete
                closedir($dh);
                return redirect()->back()->with('success','All images uploaded');
            }
            //some error
            return redirect()->back()->with('error','Problem uploading file! try later');
        }
        //some error
        return redirect()->back()->with('error','Direectory not found!');
    }

}
