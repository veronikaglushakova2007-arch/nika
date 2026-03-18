<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Имя: {{$name}}</p>
    <p>Возраст: {{$age}}</p>
    <p>Зарплата: {{$salary}}</p>

    <style>
        .red{color:red}
    </style>

    <p class='{{$classCSS}}'>красный текст</p>

    <input value="{{$var1}}">
    <input value="{{$var2}}">
    <input value="{{$var3}}">
</body>
</html>