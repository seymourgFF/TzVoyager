<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class MainController extends Controller
{
    public function main()
    {
        $posts = Post::all();
        return view('main.index',compact('posts'));
    }

    public function post(Post $post)
    {
        return view('post.index',compact('post'));
    }
}
