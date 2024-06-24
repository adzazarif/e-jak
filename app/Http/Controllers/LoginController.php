<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view("authentication.login");
    }
    public function register()
    {
        return view("authentication.register");
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

public function store(Request $request)
{
    $request->validate([
        'email'=> ['required', 'email'],
        'password'=> ['required'],
        'nama'=> ['required'],
        'alamat'=> ['required'],
        'nik' => ['required'],
        'no_telp' => ['required'] 
    ]);

    User::create([
        'email'=> $request->email,
        'password'=> Hash::make($request->password),
        'nik'=> $request->nik,
        'no_telp'=> $request->no_telp,
        'nama'=> $request->nama,
        'alamat'=> $request->alamat,
    ]);

    return redirect()->route('login')->with('success','Data berhasil ditambahkan');
}
}
