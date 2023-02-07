<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data['user'] = $user;


        return view('profile', $data);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('profile-page')->with('success','Data Berhasil diupdate');
    }
}
