<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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

    public function create(Category $category) {
        return view('posts/create')->with(['categories' => $category->get()]);
    }

    public function store(PostRequest $request, Post $post) {
        $post->fill($request->all())->save();
        return redirect("/posts/" . $post->id);
    }

    public function edit(Post $post, $id) {
        $data = $post->find($id);
        return view("/posts/" . $post->$id . "/edit", compact("id", "data"));
    }

    public function update(PostRequest $request, $id) {
        $data = Post::find($id);
        $data->update($request->all());
        return redirect("/posts/" . $id);
    }
}
