<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/user',[UserController::class,'show']);
Route::get('/user/all',[UserController::class,'all']);

Route::get('/user/name',function(){
    return '1';
});

Route::get('/user/surname/name',function(){
    return '2';
});

Route::get('/user/test/{name}',function($name){
    return $name;
})
?>
