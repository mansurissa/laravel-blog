<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

class BlogAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = posts::all();
      return response()->json(["message"=>"Posts fetched successfully","posts"=>$posts]);
    // echo csrf_token();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
           $post =  new posts();
           $post->title = $request['title'];
           $post->tags = $request['tags'];
           $post->content = $request['content'];
           $post->save();
        return response()->json(["message"=>"Post created successfully","post"=>$post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(posts $post)
    {

        echo $post;
        // return response()->json(["message"=>"One post fetched successfully","post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $post)
    {
        $post->title = $request['title'];
        $post->tags = $request['tags'];
        $post->content = $request['content'];
        $post->save();
     return response()->json(["message"=>"Post updated successfully","posts"=>$post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        //
    }
}
