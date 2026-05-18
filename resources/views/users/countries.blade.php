<!DOCTYPE html>
<html>
<head>
    <title>Пользователи и страны</title>
</head>
<body>
    <h1>Пользователи и их страны</h1>
    <table border="1">
        <tr><th>ID</th><th>Имя</th><th>Страна</th></tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->country->name ?? '-' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>