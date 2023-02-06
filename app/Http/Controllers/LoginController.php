<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home')->with('success', 'Berhasil Masuk');
        }

        return back()->withErrors([
            'email' => 'Email Anda Belum Terdaftar Atau Password Anda Salah.',
        ])->onlyInput('email');

    }
}
