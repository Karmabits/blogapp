<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $posts = Post::where("user_id", $user_id)
        ->orderBy("created_at", "desc")
        ->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        $this->validate($request,[
            'title'=>'required|max:255',
            'body'=> 'required|max:500'
        ]);
        
        $post = new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id = auth()->user()->id;
        $post->active=false;
        $post->save();

        return redirect('/posts')->with('success', 'Įrašas sukurtas');
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
        $post= Post::find($id);
        if($post==null)
            return redirect('/')->with('error', 'Įrašas su tokiu id neegzistuoja.');
        return view('posts.show')->with('post', $post);
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
        $post= Post::find($id);
        //check if user is trying to edit his own post
        if(auth()->user()->id!==$post->user_id){
            return redirect('/')->with('error', 'Negalite redaguoti ne savo blog\'o įrašų.');
        }
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request,[
            'title'=>'required|max:255',
            'body'=> 'required|max:500'
        ]);
        
        $post = Post::find($id);
        //check if user is trying to edit his own post
        if(auth()->user()->id!==$post->user_id){
            return redirect('/')->with('error', 'Negalite redaguoti ne savo blog\'o įrašų.');
        }
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Įrašas atnaujintas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post= Post::find($id);
        //check if user is trying to delete his own post
        if(auth()->user()->id!==$post->user_id){
            return redirect('/')->with('error', 'Negalite trinti ne savo blog\'o įrašų.');
        }
        $post->delete();
        return redirect('/')->with('success', 'Įrašas ištrintas');
    }
}
