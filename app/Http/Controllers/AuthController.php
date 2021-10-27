<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('Home');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['User_Name' => $request->user_name, 'password' => $request->password])) {
            if (Auth::user()->hasRole('admin')) {
                $route = route('Admin.index');
            } elseif (Auth::user()->hasRole('support')) {
                $route = route('Support.index');
            } else {
                $route = route('User.dashboard');
            }
            return response()->json([
                'status' => true,
                'url' => $route,
            ]);
        }

        return response()->json([
            'status' => false,
            'msg' => 'Unable to login',
        ]);
    }
}
