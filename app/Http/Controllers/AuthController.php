<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // CEK LOGIN
        if (Auth::attempt($login)) {
            $user = Auth::getProvider()->retrieveByCredentials($login);
            return redirect('dashboard');
        } else {
            // Auth Gagal
            return back()->withErrors([
                'message' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'));
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return  redirect()->route('login');
    }
}
