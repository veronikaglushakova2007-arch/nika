<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function show()
    {
        $name='ника';
        $age=19;
        $salary=2000;

        return view('test',[
            'name'=>$name,
            'age'=>$age,
            'salary'=>$salary
        ]);
    }
}
