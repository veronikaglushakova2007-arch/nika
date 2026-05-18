<!DOCTYPE html>
<html>
<head>
    <title>Полная информация о пользователях</title>
</head>
<body>
    <h1>Пользователи, города и страны</h1>
    <table border="1">
        <tr><th>ID</th><th>Имя</th><th>Город</th><th>Страна</th></tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->city->name ?? '-' }}</td>
            <td>{{ $user->city->country->name ?? '-' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>