<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array('posts'=>['Post1', 'Post2', 'Post3']);
        return view('pages.index')->with($data);
    }
}
