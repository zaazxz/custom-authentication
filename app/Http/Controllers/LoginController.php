<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        } elseif (Auth::guard('masyarakat')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back();
    }

    public function logout(Request $request)
    {
        if (Auth::guard('masyarakat')->check()) {
            Auth::guard('masyarakat')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');

        } elseif (Auth::guard('user')->check()) {

            Auth::guard('user')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
    }
}
