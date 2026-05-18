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
    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <table>
        <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Дата</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->created_at }}</td>
        <td><a href="/post/edit/{{ $post->id }}"></a></td>
        <td><a href="/post/del/{{ $post->id }}" 
               onclick="return confirm('Удалить статью «{{ $post->title }}»?')"></a></td>
    </tr>
    @endforeach
    </table>
</body>
</html>