@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div >


            <div class="content-wrapper">
                 <div class="container">
                     <div class="row">

                         <div class="col-md-3 col-sm-3 col-xs-6">
                              <div class="alert alert-info back-widget-set text-center">
                                    <i class="fa fa-bars fa-5x"></i>
                                    <h3>{{ $postsCount }}+ Posts</h3>
                                   Total posts
                                </div>
                            </div>
                      <div class="col-md-3 col-sm-3 col-xs-6">
                              <div class="alert alert-success back-widget-set text-center">
                                    <i class="fa fa-eye fa-5x"></i>
                                    <h3>300+ Views</h3>
                                    Total Views
                                </div>
                            </div>


                </div>
                          <div class="col-md-12 ">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                   All posts
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Post Title</th>
                                                    <th>Tags</th>
                                                    <th>Created at</th>
                                                    <th>Views</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $post )
                                                 <tr>
                                                    <td>1</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->tags }}</td>
                                                    <td>{{ $post->created_at }}</td>
                                                    <td>12</td>
                                                    <td class="d-flex justify-content-around">
                                                        <button type="button" class="btn btn-dark "><a style="text-decoration:none;color:white"  href="{{ $post->id }}/">View</a></button>
                                                        <button type="button" class="btn btn-primary "><a style="text-decoration:none;color:white"  href="{{ $post->id }}/edit">Edit</a></button>
                                                        <form action="/{{ $post->id }}/delete"  method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                 </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

            </div>
        </div>
    </div>
</div>
@endsection
