<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class NewpostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

      public function createPostForm(Request $request){

        return view('newPost');
    }
      public function createPost(Request $request){
         posts::create([
            'title' => $request['title'],
            'tags' => $request['tags'],
            'content' => $request['content'],
        ]);
        return redirect('/');
    }
}
