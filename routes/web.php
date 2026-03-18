<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

	Route::get('/post', [BladeController::class, 'show']);
?>
