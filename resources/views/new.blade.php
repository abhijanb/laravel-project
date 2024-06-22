<!-- Blade template example -->
<form action="{{ route('posts.destroy', 1) }}" method="POST">
    @csrf
    @method('get')

    <button type="submit">Delete Post</button>
</form>
