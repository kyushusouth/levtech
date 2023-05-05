<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post) {
        $posts = $post->sortedLimitPaginate();
        return view("/posts/index", compact("posts"));
    }

    public function show(Post $post, $id) {
        $data = $post->find($id);
        return view("/posts/show", compact("id", "data"));
    }

    public function create() {
        return view("/posts/create");
    }

    public function store(PostRequest $request, Post $post) {
        $post->fill($request->all())->save();
        return redirect("/posts/" . $post->id);
    }
}
