<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//やりとりするモデルを宣言する
use App\Models\Post;



// |validateルール名| 内容                                                     |
// |---------------|---------------------------------------------------------|
// | required      | 入力必須                                                 |
// | max           | 最大値以下のサイズのみ許可                                  |
// | min           | 最小値以上のサイズのみ許可                                  |
// | between       | 最小値から最大値までのサイズのみ許可                          |
// | unique        | 指定したテーブルのカラムに重複する値が存在しなければ許可          |
// | boolean       | 論理値（true、false、1、0、'1'、'0'）のみ許可                |
// | date          | PHPのstrtotime()関数で解釈できる日付のみ許可                 |
// | integer       | 整数のみ許可                                              |
// | numeric       | 数値のみ許可                                              |
// | string        | 文字列のみ許可                                            |
// | image         | 画像ファイル（jpg、jpeg、png、bmp、gif、svg、webp）のみ許可   |
// | email         | 有効なメールアドレスのみ許可                                |
// | url           | 有効なURLのみ許可                                         |


class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();
        $view = view('posts.index',compact('posts')); //resources/views/[folder_name].[file_name] !exclude [.blade.php]

        return $view;
    }

    public function create() {
        $view = view('posts.create');

        return $view;
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:140',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        $redirect = redirect()->route('posts.index')->with('flash_message', '投稿が完了しました');

        return $redirect;
    }

    public function show(Post $post) {
        $view = view('posts.show', compact('post'));

        return $view;
    }

    public function edit(Post $post) {
        $view = view('posts.edit', compact('post'));

        return $view;
    }

    // 更新機能
    public function update(Request $request, Post $post) {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:140',
        ]);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // $redirect = redirect()->route('posts.show', $post)->with('flash_message', '投稿を編集しました。');
        // return $redirect;
        return redirect()->route('posts.show', $post)->with('flash_message', '投稿を編集しました。');
    }
    public function destroy(Post $post) {
        $post->delete();
        $redirect = redirect()->route('posts.index')->with('flash_message', '投稿を削除しました');

        return $redirect;
    }
}
