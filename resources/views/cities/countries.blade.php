<!DOCTYPE html>
<html>
<head>
    <title>Города и страны</title>
</head>
<body>
    <h1>Города и их страны</h1>
    <table border="1">
        <tr><th>Город</th><th>Страна</th></tr>
        @foreach ($cities as $city)
        <tr><td>{{ $city->name }}</td><td>{{ $city->country->name ?? '-' }}</td></tr>
        @endforeach
    </table>
</body>
</html>