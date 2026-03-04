<?php

namespace App\Http\Controllers;

<?php
class PostController extends Controller{
    public function show(){
        $name='иван';
        $surname='иванов';
        $title='my view';
        return view('post.show',[
            'name'=>$name,
            'surname'=>$surname,
            'title'=>$title
        ]);
    }
}
?>
