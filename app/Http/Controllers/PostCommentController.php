<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $post->comments()->create(array_merge(
                                $request->only('message'),
                                ['user_id' => auth()->id()]
                            ));

        return redirect()->back();
    }
}
