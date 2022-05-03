@extends('layouts.app')

@section('content')

    <a href="/posts" class = "btn btn-light border mt-5">Return</a><br><br>
    <h1 style=font-size:61px>{{$post->title}}</h1>
    <small> Written on {{$post->created_at}} by {{$post->user->name}}  </small>

    <hr>
    
    <img style="width: 100%; height:30rem; margin:0rem auto; text-align:center;" class = "mx-auto d-block"  src="/storage/cover_images/{{$post->cover_image}}" alt="">

    <div><br><br>
        {!!$post->body!!}
    </div>
    <hr>

    <small>Updated on {{$post->updated_at}}</small>
    

    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)

    <br><br><a href = "/posts/{{$post->id}}/edit" class = "btn btn-light border float-right" style="margin-left:20px; ">Edit</a>
    {!!Form::open(['action' =>  ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST' ,'class' => 'float-right' ])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endif
@endif
    @endsection 