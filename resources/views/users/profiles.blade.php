<!DOCTYPE html>
<html>
<head>
    <title>Пользователи и профили</title>
</head>
<body>
    <h1>Пользователи и их профили</h1>
    <table border="1">
        <tr><th>ID</th><th>Логин</th><th>Имя</th><th>Фамилия</th><th>Email</th></tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            @if ($user->profile)
                <td>{{ $user->profile->name }}</td>
                <td>{{ $user->profile->surname }}</td>
                <td>{{ $user->profile->email }}</td>
            @else
                <td>-</td><td>-</td><td>-</td>
            @endif
        </tr>
        @endforeach
    </table>
</body>
</html>