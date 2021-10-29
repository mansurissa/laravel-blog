
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
      <div class="blog-header">
        <div class="blog-cover-read">
          <div class="blog-author">
            <h3>Russ Beye</h3>
          </div>
        </div>
      </div>

      <div class="blog-body">
        <div class="blog-title">
          <h1>{{$post->title  }}</h1>
        </div>
        <div class="blog-summary">
          <p>{{$post->content  }}</p>
        </div>
        <div class="blog-tags">
          <ul>
            <?php $tag=explode(',',$post->tags);
            $tag[0];?>

           <li><a href="#">{{$tag[0]}}</a></li>
           <li><a href="#">{{$tag[1]}}</a></li>
           {{-- <li><a href="#">{{$tag[2]}}</a></li> --}}
            <li><a href="https://twitter.com/russbeye">twitter</a></li>
          </ul>
        </div>
      </div>

      <div class="blog-footer">
        <ul>
          <li class="published-date">2 days ago</li>
          <li class="comments"><a href="#"><svg class="icon-bubble"><use xlink:href="#icon-bubble"></use></svg><span class="numero">4</span></a></li>
          <li class="shares"><a href="#"><svg class="icon-star"><use xlink:href="#icon-star"></use></svg><span class="numero">1</span></a></li>
        </ul>
      </div>

    </div>
    <div class="container d-flex">
        @if (Auth::check())
            <button type="button" class="btn btn-primary "><a style="text-decoration:none;color:white"  href="{{ $post->id }}/edit">Edit Post</a></button>
            <form action="/{{ $post->id }}/delete"  method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
       @endif

    </div>

</div>
@endsection

