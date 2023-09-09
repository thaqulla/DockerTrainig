<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//やりとりするモデルを宣言する
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();

        return view('posts.index',compact('posts')); //resources/views/[folder_name].[file_name] !exclude [.blade.php]

    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index')->with('flash_message', '投稿が完了しました');
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post) {
        $view = view('posts.edit', compact('post'));
        return $view;
    }
}
