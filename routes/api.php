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


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/new/reader', 'RegisterController');
    Route::post('/new/chef', 'RegisterChefController');
    Route::post('/login', 'LoginController');
    Route::post('/logout', 'LogoutController');

    Route::get('/me', 'MeController');
    // Route::get('/role/{roleName}', 'RolesController');
});

Route::group(['middleware' => ['role:admin|chef|reader', 'api']], function () {
    Route::get('/restaurant', 'RestaurantController@index');
    Route::get('/recipes', 'RecipeController@index');
    Route::post('/comment/{recipe}', 'CommentController@store');
    Route::get('/towns', 'TownController@index');
    Route::get('/category', 'CategoryController@index');
    Route::post('/photo/{recipe}', 'PhotoController@store');
    Route::delete('/photo/{recipe}', 'PhotoController@destroy');
    Route::post('/comments/restaurant/{restaurant}', 'CommentRestController@store');
    Route::delete('/comments/restaurant/{restaurant}', 'CommentRestController@destroy');
    Route::post('/search', 'SearchController');
});

Route::group(['middleware' => ['role:admin', 'api']], function () {
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::get('/comments', 'CommentController@index');
    Route::post('/comments/recipe/{recipe}', 'CommentController@store'); 
});

Route::group(['middleware' => ['role:admin', 'api']], function () {
    Route::post('/recipes', 'RecipeController@store');
    Route::post('/town', 'TownController@store');
    Route::post('/category', 'CategoryController@store');
    Route::delete('/category/{category}', 'CategoryController@destroy');
    Route::delete('/town/{town}', 'TownController@destroy');
    Route::get('/roles', 'RolesController@index');
});

Route::group(['middleware' => ['role:admin|chef', 'api']], function () {
    Route::post('/recipes/{category}', 'RecipeController@store');
    Route::post('/restaurant/{town}/{category}', 'RestaurantController@store');
    Route::delete('/recipes/delete/{recipe}', 'RecipeController@destroy');
});
