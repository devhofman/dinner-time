<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use App\Http\Controllers\Interfaces;

class RegisterController extends Controller
{
    public function __invoke(Request $request) {

        $v = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:10|confirmed',
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
        $user->password = bcrypt($request->password);
        $user->assignRole('reader');
        $user->save();

        return response()->json($user, 200);
    }
}
