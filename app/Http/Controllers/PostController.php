<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function create()
    {
        $userId = Session::get('user_id');
        $user = User::find($userId);
        return view('posts.create', ['user' => $user]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = $userId;
        $post->save();

        return redirect()->route('user.home')->with('success', 'Post Created succesfully.');
    }
    public function show($id)
    {
        $userId = Session::get('user_id');

        $post = Post::find($id);
        return redirect()->route('user.home');
    }
    public function index()
    {
        $posts = Post::where('status', 'active')->get();
        $userId = Session::get('user_id');

        $user = User::find($userId);

        return view('posts.index', compact('posts'), ['user' => $user]);
    }
    public function showPost($id)
    {
        $userId = Session::get('user_id');

        $post = Post::find($id);
        $user = User::find($userId);

        return view('posts.show', compact('post'), ['user' => $user]);
    }
    public function edit($id)
    {
        $post = Post::find($id);
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('posts.edit', compact('post'), ['user' => $user]);
    }



    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $post =  Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = $userId;
        $post->save();

        return redirect()->route('user.home')->with('success', 'Post updated succesfully.');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('user.home')->with('success', 'Post deleted successfully');
    }
}