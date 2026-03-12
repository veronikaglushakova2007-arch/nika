<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController1;

	Route::get('/post', [PostController1::class, 'show']);
?>
