<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\User1Controller;

Route::get('post/show',[PostController::class,'show']);
Route::get('user/show',[User1Controller::class,'show']);
Route::get('user/city',[User1Controller::class,'city']);
Route::get('user/phone',[User1Controller::class,'phone']);
?>
