<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function show()
    {
        $name = 'Ника';
        $age = 19;
        $salary = 2000;
        $classCSS = 'red';
        $var1 = 'значение 1';
        $var2 = 'значение 2';
        $var3 = 'значение 3';
        $greenText = 'color:green';
        $text = 'ссылка на вк';
        $href = 'https://vk.com/';
        $arr = [
            'name' => 'Маша',
            'age' => 23,
            'salary' => 7000
        ];
        $arr1 = [
            'один',
            'два',
            'три'
        ];
        $city = 'Омск';
        $location = [
            'country' => 'США'
        ];
        $year = 2026;
        $str = '<b>жирный текст</b>';
        $userAge = 17;
        $numbers = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10
        ];
        $items = [
            'один', 'два', 'три', 'четыре', 'пять'
        ];
        $data = [
            1, 2, 3
        ];
        $matrix = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];
        $employees = [
            [
                'name' => 'Иван',
                'surname' => 'Иванов',
                'salary' => 1000,
            ],
            [
                'name' => 'Петр',
                'surname' => 'Петров',
                'salary' => 2000,
            ],
            [
                'name' => 'Сидор',
                'surname' => 'Сидоров',
                'salary' => 3000,
            ],
        ];
        $names = [
            'Анна', 'Мария', 'Елена'
        ];
        $numbersZero = [1, 2, 3, 0, 4, 5, 6, 0, 7, 0];

        return view('test', [
            'name' => $name,
            'age' => $age,
            'salary' => $salary,
            'classCSS' => $classCSS,
            'var1' => $var1,
            'var2' => $var2,
            'var3' => $var3,
            'greenText' => $greenText,
            'text' => $text,
            'href' => $href,
            'arr' => $arr,
            'arr1' => $arr1,
            'city' => $city,
            'location' => $location,
            'year' => $year,
            'str' => $str,
            'userAge' => $userAge,
            'numbers'=>$numbers,
            'items' => $items,
            'data' => $data,
            'matrix' => $matrix,
            'employees' => $employees,
            'names' => $names,
            'numbersZero'=>$numbersZero,
        ]);
    }
}
