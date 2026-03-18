<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function show()
    {
        $name='Ника';
        $age=19;
        $salary=2000;
        $classCSS='red';
        $var1='значение 1';
        $var2='значение 2';
        $var3='значение 3';
        $greenText='color:green';

        return view('test',[
            'name'=>$name,
            'age'=>$age,
            'salary'=>$salary,
            'classCSS'=>$classCSS,
            'var1'=>$var1,
            'var2'=>$var2,
            'var3'=>$var3,
            'greenText'=>$greenText
        ]);
    }
}
