<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $key = 'login-' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors([
                'login' => 'Terlalu banyak percobaan login. Coba lagi 1 menit.'
            ]);
        }

        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('users')
            ->where('username', $request->login)
            ->orWhere('email', $request->login)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {

            // 🔥 SIMPAN SESSION
            $request->session()->regenerate();

            session([
                'user' => $user->username
            ]);

            return redirect('/dashboard');
        } else {
             RateLimiter::hit($key, 60);
            return back()->withErrors(['login' => 'Username/email atau password salah']);
        }
    }

    public function showRegister()
    {
        return view('register');
    }


    public function register(Request $request)
    {
        // validasi sederhana
        $request->validate([
            'username' => 'required|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed'
        ]);

        DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }
}