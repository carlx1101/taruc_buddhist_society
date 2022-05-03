@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h1>Your Blog Post</h1>
                    @if(count($posts) > 0)
                    <table class ="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th colspan= "2" style = "text-align:center;">Action</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>
                                {!!Form::open(['action' =>  ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right' ])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                          
                            {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else 
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}
<br><br>
<div class="card">
    <h5 class="card-header">{{ __('Dashboard') }}</h5>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="card-body">
      <h5 class="card-title">Your Posts</h5>
      @if(count($posts) > 0)
        <table class ="table table-striped">
            <tr>
                <th>Title</th>
                <th>Created on</th>
                <th>Updated on</th>
                <th colspan="2" class = "text-center pr-5">Action</th>
            </tr>

            @foreach($posts as $post)
            <tr>
                <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>

                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-light border">Edit</a></td>
                <td>
                    {!!Form::open(['action' =>  ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST' ])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
            @endforeach
        </table>
        @else 
            <p>You have no posts yet</p>
        @endif
        <a href="/posts/create" class="btn btn-primary">Create Post</a>

    </div>
  </div>


<br><br>
<div class="card">
    <h5 class="card-header">{{ __('Dashboard') }}</h5>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="card-body">
      <h5 class="card-title">Your Event (under maintainance)</h5>
      @if(count($posts) > 0)
        <table class ="table table-striped">
            <tr>
                <th>Title</th>
                <th>Created on</th>
                <th>Updated on</th>
                <th colspan="2" class = "text-center pr-5">Action</th>
            </tr>
{{-- 
            @foreach($posts as $post)
            <tr>
                <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>

                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-light border">Edit</a></td>
                <td>
                    {!!Form::open(['action' =>  ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST' ])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
            @endforeach --}}
        </table>
        @else 
            <p>You have no event yet</p>
        @endif
        <a href="/events/create" class="btn btn-primary">Create Event</a>

    </div>
  </div>




   
@endsection
