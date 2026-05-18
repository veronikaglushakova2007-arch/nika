<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

	Route::get('/post', [BladeController::class, 'show']);

	Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])
		->where('order', 'id|title|date')
		->where('dir', 'asc|desc');

	Route::get('/post/{id}', [PostController::class, 'getOne'])
		->where('id', '[0-9]+');

	Route::match(['get', 'post'], '/post/new', [PostController::class, 'newPost']);

	Route::get('/post/change-first', [PostController::class, 'changeFirst']);

	Route::match(['get', 'post'], '/post/edit/{id}', [PostController::class, 'editPost'])
    ->where('id', '[0-9]+');

	Route::get('/post/del/{id}', [PostController::class, 'delPost'])
    ->where('id', '[0-9]+');

	Route::get('/post/deleted', [PostController::class, 'getDeletedPosts']);

	Route::get('/post/restore/{id}', [PostController::class, 'restorePost'])
    ->where('id', '[0-9]+');

	Route::get('/user/profile', [PostController::class, 'getUserWithProfile']);

	Route::get('/users/profiles', [PostController::class, 'getAllUsersWithProfiles']);

	Route::get('/user/city', [PostController::class, 'getUserWithCity']);

	Route::get('/users/cities', [PostController::class, 'getAllUsersWithCities']);

	Route::get('/cities/countries', [PostController::class, 'getAllCitiesWithCountries']);

	Route::get('/users/full', [PostController::class, 'getAllUsersWithCitiesAndCountries']);

	Route::get('/countries/cities', [PostController::class, 'getAllCountriesWithCities']);

	Route::get('/users/countries', [PostController::class, 'getAllUsersWithCountriesThrough']);

	Route::get('/products/categories', [PostController::class, 'getProductsWithCategories']);

	Route::get('/categories/products', [PostController::class, 'getCategoriesWithProducts']);
?>
