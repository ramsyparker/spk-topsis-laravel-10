<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signUp');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', join('!, ', $validator->messages()->all()))->withInput();
        }
    
        $data = $request->except('_token');
        $data['role'] = 'member';
        $data['password'] = Hash::make($request->password);
    
        $user = User::create($data);
    
        event(new Registered($user));
    
        return redirect()->route('verification.notice')->with('toast_success', 'Silakan periksa email Anda untuk verifikasi.');
    }
}
