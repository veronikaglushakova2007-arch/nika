<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

	Route::get('/post', [BladeController::class, 'show']);

	Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])
		->where('order', 'id|title|date')
		->where('dir', 'asc|desc');

	Route::get('/post/{id}', [PostController::class, 'getOne'])
		->where('id', '[0-9]+');
?>
