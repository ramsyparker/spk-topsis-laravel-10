<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){

        auth()->user() ? redirect()->route('dashboard')  : null; 

        return view('siginIn');
    }

    public function authenticate(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', join(', ', $validator->messages()->all()))->withInput();
        }

        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('toast_success', 'Berhasil Masuk!');
        }
        
        return back()->with('toast_error', 'Email atau Password yang masukkan tidak valid!')->withInput();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('landing');
    }
}
