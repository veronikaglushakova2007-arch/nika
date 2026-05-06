<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p><strong>Дата:</strong> {{ $post->created_at }}</p>
    <p><strong>Лайков:</strong> {{ $post->likes }}</p>
    <div>
        <strong>Текст:</strong>
        <p>{{ $post->text ?? 'Текст не указан' }}</p>
    </div>
    <br>
    <a href="/post/all">← Назад к списку</a>
</body>
</html>