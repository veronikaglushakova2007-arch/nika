<!DOCTYPE html>
<html>
<head>
    <title>Редактирование статьи</title>
</head>
<body>
    <h1>Редактирование статьи #{{ $post->id }}</h1>
    
    <form method="POST">
        @csrf
        <p>Название: <input type="text" name="title" value="{{ $post->title }}" required></p>
        <p>Slug: <input type="text" name="slug" value="{{ $post->slug }}" required></p>
        <p>Лайки: <input type="number" name="likes" value="{{ $post->likes }}"></p>
        <p>Текст: <textarea name="text" rows="5" cols="40">{{ $post->text }}</textarea></p>
        <button type="submit">Сохранить изменения</button>
    </form>
    
    <a href="/post/all">← Назад к списку</a>
</body>
</html>