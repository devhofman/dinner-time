<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request) {

        $data = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed'
        ]);

        if ($data->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $data->errors()
            ], 422);
        }

        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'status' => 'Register success!'
        ], 200);
    }

    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return response()->json(['status' => 'success', 'token' => $token], 200)->header('Authorization', $token);
        }

        return response()->json(['error' => 'login_error'], 401);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    private function guard()
    {
        return Auth::guard();
    }

    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

}
