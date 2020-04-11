<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{

    public function __construct() 
    {
        $this->middleware(['role:admin|auth:api']);
    }
    
    public function index() 
    {    
        $users = User::with([
            'recipes', 'comments'
        ])->get();
        return response()->json($users, 200);
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'roles' => 'required'
        ]);

        if ($v->fails())
        {
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }

        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = bcrypt((str_random(8)));
        $user->assignRole($request->roles);
        $user->save();

        return response()->json($user, 200);
    }

}
