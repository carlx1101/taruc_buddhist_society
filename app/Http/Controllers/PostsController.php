<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        // return Post::all(); 
        // return view('posts.index');

        //$posts = Post::orderBy('title','desc')->get(); 
        //return Post::where('title','Post Two')->get(); 

        
        // showing 1 post 
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        

        $posts = Post::orderBy('created_at','desc')->paginate(10); 

        //$posts = DB::select('SELECT * FROM posts');
        
        return view('posts.index')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999' // megabite, normally database cannot accept 2mb 
        ]);

        if($request->hasFile('cover_image'))
        {
            // get filename with extension 
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            
            // seperate it , only get filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // just extension 
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            // filename to store extension
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // upload image image 
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            }
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }
        // creating post post
        $post = new Post;
        $post->title = $request->input('title'); 
        $post->body = $request->input('body'); 
        $post->user_id = auth()->user()->id; 
        $post->cover_image = $fileNameToStore;
        $post->save();


        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);

        if(auth()->user()->id !== $post->user_id)
        {
            return redirect('/posts')->with('error','Unauthorize Action');

        }
        return view('posts.edit')->with('post',$post);


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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('cover_image'))
        {
            // get filename with extension 
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            
            // seperate it , only get filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // just extension 
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            // filename to store extension
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // upload image image 
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            }

 
        // creating post post
        $post = Post::find($id);
        $post->title = $request->input('title'); 
        $post->body = $request->input('body'); 
        if ($request->hasFile('cover_image')) {
            Storage::delete('public/cover_images/' . $post->cover_image);
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if(auth()->user()->id !== $post->user_id)
        {
            return redirect('/posts')->with('error','Unauthorize Action');

        }
        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');

    }
}
