<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use DB;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function index()
    {
        $events = Event::orderBy('created_at','desc')->paginate(10); 

        //$posts = DB::select('SELECT * FROM posts');
        
        return view('events.index')->with('events',$events);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'event_name' => 'required',
            'event_description' => 'required',
            // 'event_datetime' => 'required',
            'event_location' => 'required',
            // 'cover_image' => 'image|nullable|max:1999' 
            // megabite, normally database cannot accept 2mb 
        ]);

        $event = new Event;
        $event->event_name = $request->input('event_name'); 
        $event->event_description = $request->input('event_description'); 
        // $event->event_at = $request->input('event_datetime'); 
        $event->event_location = $request->input('event_location'); 
        $event->user_id = auth()->user()->id; 
        // $post->event_location = $fileNameToStore;
        $event->save();


        return redirect('/events')->with('success','Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        if(auth()->user()->id !== $event->user_id)
        {
            return redirect('/events')->with('error','Unauthorize Action');

        }
        $event->delete();
        return redirect('/events')->with('success','Event Deleted');
    }
}
