<x-layout>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        <input type="number" name="author_id" id="author_id" value="{{ $post->author_id }}" required>
        <input type="number" name="category_id" id="category_id" value="{{ $post->category_id }}" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $post->body }}</textarea>
        <button type="submit">Update Post</button>
    </form>
</x-layout>