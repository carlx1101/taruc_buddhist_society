@extends('layouts.app')

@section('content')
    <br><br>

    <style>

    </style>
    <h1>Posts</h1>
    @if(count($posts) > 0 )
        @foreach($posts as $post)
            <div class="card padding p-3">
                <div class="row">
                    <div class="col-md-3">
                        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>

                    <div class="col-md-9 ">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <div  style = "
                        display: -webkit-box;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;  
                        overflow: hidden;
                      ">
                            <p>{!!$post->body!!}</p>

                        </div>
                  
                    </div>
                </div>
            </div>
            <br>
        @endforeach
 {{$posts->links('pagination::bootstrap-4')}}
    @else 
        <p>No posts found</p>
    @endif
@endsection 