<?php

namespace App\Http\Controllers;

class User1Controller extends Controller{
    public function show(){
        $name1='петр';
        $surname1='петров';
        return view('user.show',[
            'name1'=>$name1,
            'surname1'=>$surname1,
            'title'=>'my_view'
        ]);
    }
    public function city(){
        $city='омск';
        $country='россия';
        return view('user.city',[
            'city'=>$city,
            'country'=>$country,
            'title'=>'город и страна пользователя'
        ]);
    }
    public function phone(){
        $phone='89048239212';
        return view('user.phone',[
            'phone'=>$phone,
            'title'=>'телефон пользователя'
        ]);
    }
}
?>
