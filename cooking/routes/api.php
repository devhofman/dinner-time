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

Route::get('/recipes', 'RecipeController@index');
Route::post('/recipes', 'RecipeController@store');
Route::patch('/recipes/{recipe}', 'RecipeController@update');
Route::delete('/recipes/{recipe}', 'RecipeController@destroy');

Route::get('/restaurants', 'RestaurantController@index');
Route::post('/restaurants', 'RestaurantController@store');
Route::patch('/restaurants', 'RestaurantController@update');
Route::delete('/restaurants', 'RestaurantController@destroy');
