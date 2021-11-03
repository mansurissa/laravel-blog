<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class blog extends Controller
{

    public function blog(Request $request){

        $posts=posts::get();
        return view('home_blog',compact('posts'));
    }
    public function read(posts $post){
        return view('readPost',compact('post'));
    }
}
