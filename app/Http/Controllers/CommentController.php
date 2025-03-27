<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|max:255'
        ]);

        Comment::create([
            'post_id' => $post->id,
            'content' => $request->content
        ]);

        return redirect()->back();
    }
}
