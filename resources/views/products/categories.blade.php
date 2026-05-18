<!DOCTYPE html>
<html>
<head>
    <title>Продукты и категории</title>
</head>
<body>
    <h1>Продукты и их категории</h1>
    @foreach ($products as $product)
        <h2>{{ $product->name }}</h2>
        <ul>
            @foreach ($product->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>