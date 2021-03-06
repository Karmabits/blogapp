<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
        $posts= Post::where('active', true)->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.index')->with('posts', $posts);
    }
}
