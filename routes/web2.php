<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/vasya', function() {
//     return 'petya';
// });

// Route::get('/', function() {
//     return '!!!';
// });

// Route::get('/',function() {
//     return 'это главная страница';
// });

// Route::get('/posts',function(){
//     return 'список постов';
// });

// Route::get('/post/1', function(){
//     return 'первый пост';
// });

// Route::get('/post/{id}',function($id){
//     return'пост'.$id;
// });

// Route::get('/post/{catId}/{postId}',function($catId,$postId){
//     return $catId.''.$postId;
// });

// Route::get('/posts/page/{page?}', function ($page=1){
//     return 'страница номер'.$page;
// });

// Route::get('/post/{id}',function($id){
//     return 'пост'.$id;
// })->where ('id','[0-9]+');

// Route::get('/post/{slug}/{id}',function($slug,$id){
//     return 'пост'.$slug.''.$id;
// })->where('slug','[a-z0-9_-]+')->where('id','[0-9]+');

// Route::get('/post/{id}',function($id){
//     //
// })->whereNumber('id');

// Route::get('/post/{slug}',function($slug){
//     //
// })->whereAlpha('slug');

// Route::get('/post/{slug}',function($slug){
//     //
// })->whereAlphaNumeric('slug');

// Route::prefix('blog')->group(function(){
//     Route::get('/post/all',function($id){
//         return 'all';
//     });
//     Route::get('/post/{id}',function($id){
//         return $id;
//     });
// });

// Route::get('/post/all',function(){
//     return 'all';
// })->name('posts');

// задача 1

Route::get('/test',function(){
    return 'hello';
});

// задача 2

Route::get('/dir/test',function(){
    return 'hi';
});

// задача 3

Route::get('/user/{name}',function($name){
    return 'имя'.' '.$name;
})->where('name','[a-z]+');

// задача 4

Route::get('/user/{surname}/{name}',function($surname,$name){
    return $surname.'1 '.$name;
})->where('name','[a-z]+')->where('surname','[a-z]+');

// задача 11 !

Route::get('/city/{name}',function($name){
    return $name;
})->where('name', '[a-z]');

// задача 5

Route::get('/city/{city?}',function($city='omsk'){
    return 'город'.'1'.$city;
});

// задача 6

Route::get('/user/{id}',function($id){
    return $id;
})->where('id','[0-9]+');

// задача 7 !

Route::get('/user/{id}/{name}',function($id=1,$name='n'){
    return $id.'2 '.$name;
})->where('id','[0-9]')->where('name','[a-z]{2}');

// задача 8

Route::get('posts/{date}',function($date){
    return $date;
});

// задача 9

Route::get('/{year}/{month}/{day}',function($year,$month,$day){
    return $day.' '.$month.' '.$year;
});

// задача 10 !

Route::get('/users/{order}',function($name){
    return $name ;
})->where('order','name'  'surname'  'age');
// })->where('order','name')->where('order','surname')->where('order','age');

// задача 12

class RouteServiceProvider{
  public function boot(){
    Route::pattern('name','[a-z0-9_-]');
}
}
Route::get('/name/{name}',function($name){
    return $name;
});

// задача 13

