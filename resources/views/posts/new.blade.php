<!DOCTYPE html>
<html>
<head>
    <title>Новая статья</title>
</head>
<body>
    <h1>Добавление статьи</h1>
    
    <form method="POST">
        @csrf
        <p>Название: <input type="text" name="title" required></p>
        <p>Slug: <input type="text" name="slug" required></p>
        <p>Лайки: <input type="number" name="likes" value="0"></p>
        <p>Текст: <textarea name="text" rows="5" cols="40"></textarea></p>
        <button type="submit">Сохранить</button>
    </form>
    
    <a href="/post/all">← Назад</a>
</body>
</html>