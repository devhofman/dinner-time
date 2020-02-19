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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/commentaries', 'CommentaryController@index');

Route::get('/recipes', 'RecipesController@index');
Route::post('/recipes', 'RecipesController@store');
Route::patch('/recipes/{recipe}', 'RecipesController@update');
Route::delete('/recipes/{recipe}', 'RecipesController@destroy');

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
