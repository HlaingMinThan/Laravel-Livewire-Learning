<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome', compact('posts'));
});

Route::get('/posts/{post}', function (Post $post) {
    return view('post', compact('post'));
});

Route::get('/posts/{post}/comment', function (Post $post) {
    request()->validate([
        'body' => 'required|min:5'
    ]);
    $post->comments()->create([
        'user_id' => 1,
        'body' => request('body')
    ]);
    return back();
})->name('comments.store');
