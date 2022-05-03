
@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\EventController@store', 'method' => 'POST']) !!}

       <div class="form-group">
            {{Form::label('event_name', 'Event Name')}}
            {{Form::text('event_name', '', ['class' => 'form-control', 'placeholder' => 'Event Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('event_description', 'Event Description')}}
            {{Form::textarea('event_description', '', ['id' => 'textarea' ,'class' => 'form-control', 'placeholder' => 'Event Description'])}}
        </div>


        {{-- <div class="form-group">
            <label for = "event_date">
                Event Date
            </label><br>
            <input type="date" id = "event_date">
        </div> --}}
        
        <div class="form-group">
            {{Form::label('event_location', 'Event Location ')}}
            {{Form::text('event_location', '', ['class' => 'form-control', 'placeholder' => 'Event Location'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection