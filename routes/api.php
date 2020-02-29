<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function() {
    Route::group(['middleware' => 'auth:api'],
    function() {
        Route::post('/register', 'AuthController@register');
        Route::post('/login', 'AuthController@login');
        Route::get('/me', 'AuthController@me');
        Route::post('/logout', 'AuthController@logout');
    });
});

Route::prefix('user')->group(function() {
    Route::get('/recipes', 'RecipeController@index');
});

// Route::get('/users/{id}/recipes', 'UserController@showRecipe');

//RECIPES
Route::get('/recipes/{id}', 'RecipeController@showRecipeOf');
Route::post('/recipes/store', 'RecipeController@store');


//COMMENTS
Route::get('/comments', 'CommentController@index');

//USERS
Route::get('/users', 'UserController@index');


