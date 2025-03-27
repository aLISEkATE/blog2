<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
// In CommentController.php
public function store(Request $request, Post $post)
{
    $request->validate([
        'content' => ["required", "max:20"],
        'name' =>["required", "max:20"]
    ]);

    
    Comment::create([
        'post_id' => $post->id,
        'content' => $request->content,
        'name' => $request->name
    ]);

    return redirect()->back();
}

}
