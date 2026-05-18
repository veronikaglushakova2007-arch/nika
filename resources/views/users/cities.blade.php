<!DOCTYPE html>
<html>
<head>
    <title>Пользователи и города</title>
</head>
<body>
    <h1>Пользователи и их города</h1>
    <table border="1">
        <tr><th>ID</th><th>Имя</th><th>Город</th></tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->city->name ?? 'не указан' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>