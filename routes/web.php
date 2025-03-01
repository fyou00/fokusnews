<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

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