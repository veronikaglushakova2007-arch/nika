<!DOCTYPE html>
<html>
<head>
    <title>Список статей</title>
</head>
<body>
    <h1>Список статей</h1>
    
    <p>Сортировка: 
        <a href="/post/all/id/desc">по ID (убыв)</a> | 
        <a href="/post/all/id/asc">по ID (возр)</a> |
        <a href="/post/all/title/desc">по заголовку (убыв)</a> |
        <a href="/post/all/title/asc">по заголовку (возр)</a> |
        <a href="/post/all/date/desc">по дате (убыв)</a> |
        <a href="/post/all/date/asc">по дате (возр)</a>
    </p>
    
    <table>
        <tr><th>ID</th><th>Заголовок</th><th>Описание</th></tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>>
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
            </td>
            <td>{{ $post->text }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>