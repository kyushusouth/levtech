<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // return Post::get();
        // return Post::find(2);
        // return Post::all();
        // return Post::where("title", "update_test2")->count();

        $post = new Post();
        return $post->get();
    }

    public function test() {
        $post = new Post();
        // $data = $post->sortedLimitGet();
        $data = $post->sortedLimitPeginate();
        return view("/posts/index", compact("data"));
        // return view("/posts/index")->with(["data" => $data]);
    }

    // public function index(Post $post)
    // {
    //     return $post->get();
    // }
}
