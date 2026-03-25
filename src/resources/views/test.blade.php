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

    <p style='{{$greenText}}'>зеленый текст</p>

    <a href="{{$href}}">{{$text}}</a>

    <p>Сегодня: {{date('d.m.Y')}}</p>

    <p>Имя: {{$arr['name']}}</p>
    <p>Возраст: {{$arr['age']}}</p>
    <p>Зарплата: {{$arr['salary']}}</p>

    <p>В массиве {{count($arr1)}} элемента(ов)</p>

    <p>Город: {{ $city ?? 'Москва' }}</p>

    <p>Страна: {{ $location["country"] ?? "Россия" }}</p>
    <p>Город: {{ $location["city"] ?? "Москва" }}</p>

    <p>Год: {{ $year ?? date('Y') }}</p>
    <p>Месяц: {{ $month ?? date('m') }}</p>
    <p>День: {{ $day ?? date('d') }}</p>

    <p>Обычный вывод: {{ $str }}</p>
    <p>Теги выполнились: {!! $str !!}</p> 

    {{-- не видимый комментарий --}}
    <!-- видимый комментарий -->

    @if ($userAge > 18)
        <p>старше 18</p>
    @elseif($userAge==18)
        <p>ровно 18</p>
    @else
        <p>младше 18</p>
    @endif

    @unless($userAge>=18)
        <p>несовершеннолетний</p>
    @endunless    

    @if(count($numbers)>0)
        <p>сумма элементов: {{array_sum($numbers)}}</p>
    @else
        <p>массив пуст</p>
    @endif

    <ul>
        @foreach($numbers as $num)
            <li>{{$num}} в квадрате = {{$num*$num}}</li>
        @endforeach
    </ul>

    <ul>
        @foreach($numbers as $num)
            <li>квадратный корень {{$num}} = {{sqrt($num)}}</li>
        @endforeach
    </ul>
    

</body>
</html>
