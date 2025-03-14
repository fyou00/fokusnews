@extends('components/layout')

@section('konten')
  <div class="container px-5">
    <a href="posts/create" class="btn btn-primary">create posts</a>
    <table class="table">
    <thead>
      <tr>
      <th>Title</th>
      <th>Content</th>
      <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
      <td>{{ $post->title }}</td>
      <td>{{ $post->content }}</td>
      <td>
      <a href="{{ route('posts.edit', $post) }}" class="btn btn-success">Edit</a>

      <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
      </form>
      </td>
      </tr>
    @endforeach
    </tbody>
    </table>
  </div>
@endsection