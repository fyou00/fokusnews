<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }
  // Menampilkan form input
  public function create()
  {
    return view('posts.create');
  }

  // Menyimpan data ke database
  public function store(Request $request)
  {
    // Validasi input
    $request->validate([
      'title' => 'required|max:255',
      'content' => 'required',
    ]);

    // Simpan data ke database
    Post::create($request->all());

    // Redirect ke halaman lain dengan pesan sukses
    return redirect()->route('posts.create')->with('success', 'Post created successfully!');
  }
  
  public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
