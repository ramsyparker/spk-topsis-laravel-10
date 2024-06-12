@extends('layouts.base-auth')

@section('asset-image')
<img src="{{asset('Assets/Img/reset.jpg')}}" class="login-img" />
@endsection

@section('title', 'Reset Kata Sandi')

@section('content')
<form action="{{ route('password.update') }}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="login-form d-flex flex-column gap-1 gap-lg-2 mt-2 mt-lg-4 mt-4">
        <label for="email">Email</label>
        <input name="email" value="{{ old('email') }}" class="form-control text-black" id="email" placeholder="Masukkan email" />
        
        <label for="password">Kata Sandi Baru</label>
        <input name="password" type="password" class="form-control text-black" id="password" placeholder="Masukkan kata sandi baru" />

        <label for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
        <input name="password_confirmation" type="password" class="form-control text-black" id="password_confirmation" placeholder="Konfirmasi kata sandi baru" />
        
        <button class="btn btn-dark login-btn mt-1 mt-lg-2" type="submit">Reset Kata Sandi</button>
    </div>
</form>
@endsection
