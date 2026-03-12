<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my view</title>
</head>
<body>
    <x-layout>
        <x-slot:title>
            {{$title}}-site.com
        </x-slot>

        {{$text}}
    <x-layout>
</body>
</html>

