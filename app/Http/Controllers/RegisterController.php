<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function add(Request $request) {

        $data = $request->validate([
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        if ($data) {
            User::create($data);

            return redirect()->route('pages-home')->with('success', 'Berhasil Mendaftar');
        } else {
            dd('error');
            return back()->withInput()->withErrors($data);
        }
    }
}
