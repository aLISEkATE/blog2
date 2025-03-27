<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $posts = Post::with('category')->get(); // Fetch posts with category
        return view("posts.index", compact("posts"));
    }

    public function show(Post $post) 
    {
        $post->load('category', 'comments');
        return view("posts.show", compact("post"));
    }

    public function create(Post $categories) 
    {
    
        $categories = Category::all(); 
      
        return view("posts.create.create", compact("categories"));
    }
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required", "max:100"]
        ]);
    
        Post::create([
            "content" => $request->content,
            "category_id" => $request->category_id
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
    $categories = Category::all(); 
    return view("posts.edit.edit", compact("post", "categories"));
}

    public function destroy(Post $post) 
    {
      $post->delete();
      return redirect("/posts");
    }
    
}

