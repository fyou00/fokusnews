<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
      $posts = Post::all(); // Ambil semua data post
      return view('index', compact('posts'));
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
}