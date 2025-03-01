@extends('components/layout')

@section('konten')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card" style="width: 26rem;">
          <div class="card-body">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}" required>
            <label for="content">Content:</label>
            <textarea class="form-control" name="content" id="content" required>{{ $post->content }}</textarea>
            <button class="btn btn-success mt-2" type="submit">Update Post</button>
          </div>
        </div>
    </form>
@endsection
