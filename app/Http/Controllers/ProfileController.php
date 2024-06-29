<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan ini diimpor

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('profile.edit')->with('error', 'User tidak terdaftar');
        }

        $user->name = $request->input('username');
        if($user->save()) {
            return redirect()->route('profile.edit')->with('success', 'Username berhasil di ganti');
        } else {
            return redirect()->route('profile.edit')->with('error', 'Gagal mengganti username');
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('profile.edit')->with('error', 'User tidak terdaftar');
        }

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'Password yang anda masukan tidak sesuai']);
        }

        $user->password = Hash::make($request->input('new_password'));
        
        if($user->save()) {
            return redirect()->route('profile.edit')->with('success', 'Password berhasil di ganti');
        } else {
            return redirect()->route('profile.edit')->with('error', 'Gagal Mengganti Password');
        }
    }
}
