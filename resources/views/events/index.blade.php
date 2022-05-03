@extends('layouts.app')

@section('content')
    <br><br>
    <h1>Upcoming Events (Under Maintainance)</h1>
    @if(count($events) > 0 )
        @foreach($events as $event)
            <div class="card padding p-3">
                <div class="row">
                    <div class="col-md-3">
                        <img style="width: 100%" src="/storage/cover_images/{{$event->cover_image}}" alt="">
                    </div>

                    <div class="col-md-9 ">
                        <h3><a href="/events/{{$event->id}}">{{$event->event_name}}</a></h3>
                        <small>Published on {{$event->created_at}} by TARUC Buddhist Society </small>
                        <div style = "
                            display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;  
                            overflow: hidden;
                          ">
                            <p>{!!$event->event_description!!}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
        @endforeach
 {{$events->links('pagination::bootstrap-4')}}
    @else 
        <p>No events found</p>
    @endif
@endsection 