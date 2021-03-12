<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class AjaxController extends Controller
{
    //
    public function changePostStatus($id) {
        //changing post status
        $post = Post::find($id);
        $post->active=!($post->active);
        $post->save();

        return response()->json(['id'=>$id, 'message'=>'Įrašo statusas sėkmingai pakeistas.'], 200);
    }

    public function deletePost($id) {
        //changing post status
        $post = Post::find($id);
        $post->delete();

        return response()->json(['id'=>$id, 'message'=>'Įrašas sėkmingai pašalintas.'], 200);
    }
}
