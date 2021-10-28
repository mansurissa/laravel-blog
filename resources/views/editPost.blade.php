
@extends('layouts.app')

@section('content')
<div class="container">

<form action="/{{ $post->id }}/update"  method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Edit post Title</label>
      <input type="text" value="{{ $post->title }}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter post title">
    </div>
     <div class="form-group">
        <label for="exampleInputEmail1"> Edit post Tags</label>
        <input type="text" value= "{{ $post->tags }}" name="tags" class="form-control" id="tags" aria-describedby="tags" placeholder="Enter tags">
        <small id="emailHelp" class="form-text text-muted">Separate tags with comma eg: tag1,tag2</small>

      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Edit post Content</label>
      <textarea type="text"  name="content" rows="10" class="form-control" id="exampleInputPassword1" placeholder="Enter post content">{{ $post->content }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save changes</button>
  </form>
</div>
@endsection