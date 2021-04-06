<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        $post = Post::all();

        return view('post.index')->with(['post'=>$post]);

    }
}
