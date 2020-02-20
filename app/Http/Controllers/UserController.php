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

    public function showRecipe($userId) {

        $users = User::findOrFail($userId)->recipes;

        return response()->json([
            'status' => 'List of recipes of users',
            'Recipe of user' => $users->toArray()
        ], 200);
    }

    public function show(Request $request, $id) {
        
        $users = User::find($id);

        return response()->json([
            'status' => 'List of users',
            'users' => $users->toArray()
        ], 200);
    }
}
