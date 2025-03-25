<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }

    public function show(Post $todo) 
    {
        return view("posts.show", compact("post"));
    }

    public function create(Post $create) 
    {
        return view("posts.create.create", compact("create"));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"]
        ]);

        Post::create([
            "content" => $request->content,
            "category_id" => "1"
        ]);

        return redirect("/posts");
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"]
        ]);

        $post->content = $validated["content"];
        $post->category_id = $validated["category_id"];

        $post->save();
        return redirect("/posts/" . $post->id);
    }

    public function edit(Post $post) 
    {
        return view("posts.edit.edit", compact("post"));
    }

    public function destroy(Post $post) 
    {
      $post->delete();
      return redirect("/posts");
    }
    
}
