@extends('layouts.app')

@section('konten')
    <h1>Show Post</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Content:</strong> {{ $post->content }}</p>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
@endsection