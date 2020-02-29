<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
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

}
