<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return response()->json([
            'status' => 'List of users',
            'users' => $users->toArray()
        ], 200);
    }

    public function showRecipeOf() {

        $recipeOf = User::find(auth()->user()->id)->recipes()->get();

        return response()->json([
            'status' => 'Recipes of user',
            'Recipes' => $recipeOf->toArray()
        ], 200);
    }

}
