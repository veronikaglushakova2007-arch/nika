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
    
    <ul>
        @foreach($items as $key=>$value)
            <li>{{$key+1}} => {{$value}}</li>
        @endforeach
    </ul>

    <ul>
        @foreach($numbers as $num)
            @if($num%2==0)
                <li>{{$num}} - четное</li>
            @endif
        @endforeach
    </ul>

    @if(is_array($data))
        <ul>
            @foreach($data as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @else  
        <p>{{$data}}</p>
    @endif

    <table border="1">
        @foreach ($matrix as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <ul>
        @foreach ($employees as $worker)
            <li>{{ $worker['name'] }} {{ $worker['surname'] }} - {{ $worker['salary'] }}</li>
        @endforeach
    </ul>

    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach ($employees as $worker)
            <tr>
                <td>{{ $worker['name'] }}</td>
                <td>{{ $worker['surname'] }}</td>
                <td>{{ $worker['salary'] }}</td>
            </tr>
        @endforeach
    </table>

    @if (count($names) > 0)
        @foreach ($names as $name)
            <p>{{ $name }}</p>
        @endforeach
    @else
        <p>Нет элементов</p>
    @endif

    <ul>
        @foreach ($items as $elem)
            <li>{{ $loop->index }}: {{ $elem }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($items as $elem)
            <li>{{ $loop->iteration }}: {{ $elem }}</li>
        @endforeach
    </ul>

    <style>
        .first { color: pink; }
        .last { color: blue;}
    </style>
    <ul>
        @foreach ($items as $elem)
            <li 
                @if($loop->first) class="first" @endif
                @if($loop->last) class="last" @endif
            >
                {{ $elem }}
            </li>
        @endforeach
    </ul>

    @foreach ($numbers as $num)
        @if ($loop->remaining < 3)
            <i>{{ $num }}</i>
        @else
            <b>{{ $num }}</b>
        @endif
    @endforeach

</body>
</html>
