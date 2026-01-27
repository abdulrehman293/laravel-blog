<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blog</title>
</head>
<body>
    <h1>All Blog Posts</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a>

    @foreach($posts as $post)
        <div style="margin-bottom: 20px;">
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->body, 150) }}</p>
        </div>
    @endforeach
</body>
</html>
