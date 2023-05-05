<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post) {
        // return Post::get();
        // return Post::find(2);
        // return Post::all();
        // return Post::where("title", "update_test2")->count();
        return $post->get();
    }

    public function test(Post $post) {
        // $data = $post->sortedLimitGet();
        $posts = $post->sortedLimitPaginate();
        return view("/posts/index", compact("posts"));
    }

    public function show(Post $post, $id) {
        $data = $post->find($id);
        return view("posts/show", compact("id", "data"));
    }
}
