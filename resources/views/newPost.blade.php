
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{  route('create') }}"  method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Post Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter post title">
    </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Post Tags</label>
        <input type="text" name="tags" class="form-control" id="tags" aria-describedby="tags" placeholder="Enter tags">
        <small id="emailHelp" class="form-text text-muted">Separate tags with comma eg: tag1,tag2</small>

      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Post Content</label>
      <textarea type="text" name="content" rows="10" class="form-control" id="exampleInputPassword1" placeholder="Enter post content"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection