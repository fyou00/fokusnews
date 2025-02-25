<x-layout>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>
        <button type="submit">Update Post</button>
    </form>
</x-layout>