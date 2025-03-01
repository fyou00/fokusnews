<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Menampilkan form input
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Menyimpan data
// Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::resource('posts', PostController::class);

// Route::get('/', function () {
//     return view('index', ['posts' => Post::all()]);
// });

Route::get('/pendidikan', function () {
    return view('berita', ['title' => 'Pendidikan']);
});

Route::get('/ekonomi', function () {
    return view('berita', ['title' => 'Ekonomi']);
});

Route::get('/olahraga', function () {
    return view('berita', ['title' => 'Olahraga']);
});

Route::get('/wisata', function () {
    return view('berita', ['title' => 'Wisata']);
});