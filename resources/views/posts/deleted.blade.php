<!DOCTYPE html>
<html>
<head>
    <title>Удалённые статьи</title>
</head>
<body>
    <h1>Корзина (удалённые статьи)</h1>
    
    @if(session('success'))
        <div style="background: green; color: white; padding: 10px;">
            {{ session('success') }}
        </div>
    @endif
    
    <table>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Дата удаления</th>
            <th>Восстановить</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->deleted_at }}</td>
            <td><a href="/post/restore/{{ $post->id }}">Восстановить</a></td>
        </tr>
        @endforeach
    </table>
    
    <br>
    <a href="/post/all">Назад к списку статей</a>
</body>
</html>