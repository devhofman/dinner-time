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
    Route::get('/role/{roleName}', 'RolesController');
});

Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('/recipes/store', 'RecipeController@store');

});

Route::group(['middleware' => ['role:admin|chef|reader', 'api']], function () {
    Route::get('/restaurant', 'RestaurantController@index');
    Route::get('/recipes', 'RecipeController@index');
    Route::post('/comment/{recipe}', 'CommentController@store');
    Route::get('/towns', 'TownController@index');
    Route::get('/category', 'CategoryController@index');
});

Route::group(['middleware' => ['role:admin', 'api']], function () {
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::get('/comments', 'CommentController@index');
    Route::post('/comments/recipe/{recipe}', 'CommentController@store');
    Route::post('/comments/restaurant/{restaurant}', 'CommentController@storeRest');
});

Route::group(['middleware' => ['role:admin', 'api']], function () {
    Route::post('/recipes', 'RecipeController@store');
    Route::post('/town', 'TownController@store');
    Route::post('/category', 'CategoryController@store');
    Route::delete('/category/{category}', 'CategoryController@destroy');
    Route::delete('/town/{town}', 'TownController@destroy');
});

Route::group(['middleware' => ['role:admin|chef', 'api']], function () {
    Route::post('/restaurant/{town}/{category}', 'RestaurantController@store');
    Route::delete('/recipes/delete/{recipe}', 'RecipeController@destroy');
});


// Route::get('/users/{id}/recipes', 'UserController@showRecipe');

// //RECIPES
// Route::get('/recipes', 'RecipeController@index');
// Route::get('/recipes/{id}', 'RecipeController@showRecipeOf');
// Route::post('/recipes/store', 'RecipeController@store');


// //COMMENTS
// 

//USERS
