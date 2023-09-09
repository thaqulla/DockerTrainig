<?php

use Illuminate\Support\Facades\Route;
// ルーティングを設定するコントローラを宣言する
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


| HTTPリクエストメソッド  | お願い（リクエスト）の内容            | Laravelにおける用途                              |
-----------------------------------------------------------------------------------------------------------------
| GET                   | このページの情報をください            | ページの表示（index、create、show、editアクション）|
| POST                  | このデータを送るので受け取ってください | データの作成（storeアクション）                    |
| PUT / PATCH           | この新しいデータで置き換えてください   | データの更新（updateアクション）                   |
| DELETE                | このデータを削除してください          | データの削除（destroyアクション）                  |


Route::resource('posts', PostController::class);と記述した場合、Postコントローラのルーティングは以下のように自動で設定されます。なお、URLの{post}の部分にはそのデータのidが入ります。

| HTTPリクエストメソッド 　　| URL                  | アクション　 | ルート名        |
|------------------------|----------------------|------------|----------------|
| GET                    | /posts               | index      | posts.index    |
| GET                    | /posts/create        | create     | posts.create   |
| POST                   | /posts               | store      | posts.store    |
| GET                    | /posts/{post}        | show       | posts.show     |
| GET                    | /posts/{post}/edit   | edit       | posts.edit     |
| PUT(all) / PATCH(part) | /posts/{post}        | update     | posts.update   |
| DELETE                 | /posts/{post}        | destroy    | posts.destroy  |


*/

// Route::HTTPリクエストメソッド名('URL', [コントローラ名::class, 'アクション名'])->name(基準となるURL.アクション名);
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');nameは自由に決めていいが上記のようなルールが一般的

Route::get('/', function () {
    return view('welcome');
});

// 投稿の一覧ページ
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// 投稿の作成ページ
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// 投稿の作成機能
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// 投稿の詳細ページ
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// 投稿の更新ページ
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// 投稿の更新機能
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
