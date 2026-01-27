<!DOCTYPE html>
<html>
<head>
    <title>Create New Post - Laravel Blog</title>
</head>
<body>
    <h1>Create a New Post</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="5">{{ old('body') }}</textarea>
        </div>
        <button type="submit">Publish Post</button>
    </form>

    <a href="{{ route('posts.index') }}">Back to all posts</a>
</body>
</html>
