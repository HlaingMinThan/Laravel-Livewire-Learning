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
Route::get('/posts/{post}/edit', function (Post $post) {
    return view('editPost', compact('post'));
});

//changed to livewire component

// Route::patch('/posts/{post}/update', function (Post $post) {
//     $attr = request()->validate([
//         'title' => 'required',
//         'body' => 'required|min:5',
//         'photo' => 'sometimes|image|max:5000',
//     ]);
//     $post->update([
//         'title' => request('title'),
//         'body' => request('body'),
//         'photo' => request('photo') ? //if request has come with photo
//                     request('photo')->store('images', 'public') : //store it in images folder **store method first arg is store folder name ,sec argument is a disk u can check in filesystems.php**
//                     $post->photo ?? null//if not , check post has photo if it has,override that path if not save null
//     ]);
//     return back();
// })->name('posts.update');

//changed to livewire component

// Route::get('/posts/{post}/comment', function (Post $post) {
//     request()->validate([
//         'body' => 'required|min:5'
//     ]);
//     $post->comments()->create([
//         'user_id' => 1,
//         'body' => request('body')
//     ]);
//     return back();
// })->name('comments.store');
