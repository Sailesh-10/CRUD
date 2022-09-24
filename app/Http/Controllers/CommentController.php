<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'body' => 'required',
        ]);

        $userId = Session::get('user_id');
        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->user_id = $userId;
        $comment->post_id = $request->input('post_id');
        $comment->parent_id = $request->input('parent_id');
        $comment->save();
        return redirect()->back();
    }
}