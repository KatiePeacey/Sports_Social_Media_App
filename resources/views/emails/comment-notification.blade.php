<!DOCTYPE html>
<html>
<head>
    <title>New Comment on Your Post</title>
</head>
<body>
    <h1>New Comment on Your Post: {{ $post->caption }}</h1>
    <p><strong>Comment:</strong> {{ $comment->comment }}</p>
    <p><strong>Posted by:</strong> {{ $comment->player->name }}</p>
    <p><a href="{{ route('posts.show', $post->id) }}">View your post</a></p>
</body>
</html>
