<!DOCTYPE html>
<html>
<head>
    <title>Страны и города</title>
</head>
<body>
    <h1>Страны и их города</h1>
    @foreach ($countries as $country)
        <h2>{{ $country->name }}</h2>
        <ul>
            @foreach ($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>