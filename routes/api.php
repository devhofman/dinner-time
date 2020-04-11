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

});

Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('/recipes/store', 'RecipeController@store');

});

Route::group(['middleware' => ['role:admin|chef|reader', 'api']], function () {
    Route::get('/recipes', 'RecipeController@index');
    Route::post('/comment/new/{comment}', 'CommentController@store');
});

Route::group(['middleware' => ['role:admin', 'api']], function () {
    Route::get('/users', 'UserController@index');
    Route::post('/users/create', 'UserController@store');
    Route::get('/comments', 'CommentController@index');
});

Route::group(['middleware' => ['role:chef', 'api']], function () {
    Route::post('/recipes/store', 'RecipeController@store');
});

Route::group(['middleware' => ['role:admin|chef', 'api']], function () {
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


Route::get('/category', 'CategoryController@index');
Route::post('/category/add', 'CategoryController@store');


