<!DOCTYPE html>
<html>
<head>
    <title>Категории и продукты</title>
</head>
<body>
    <h1>Категории и их продукты</h1>
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <ul>
            @foreach ($category->products as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>