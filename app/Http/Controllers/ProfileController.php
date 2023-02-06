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

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        $user = User::find(auth()->id());
        $user->update($request->only(['name', 'email']));

        return redirect()->route('profile.edit')->withSuccess('Profile updated successfully.');
    }
}
