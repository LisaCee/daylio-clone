<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class ProfileController extends Controller
{
    public function get()
    {
        return view('profile.index', ['user' => auth()->user()]);
    }

    public function edit()
    {
        return view('profile.edit', ['user' => auth()->user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $user = Auth::user();

        $user->update([
            'email' => $request->email,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user['password']
        ]);
        
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
}
