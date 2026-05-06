<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

   public function login(Request $request)
{
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
        session([
            'user' => $user->username
        ]);

        return redirect('/dashboard');
    } else {
        return back()->withErrors(['login' => 'Username/email atau password salah 😭']);
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