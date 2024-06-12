@extends('layouts.base-auth')

@section('asset-image')
<img src="{{asset('Assets/Img/buatlogin.jpg')}}" class="login-img" />
@endsection

@section('title', 'LOGIN')

@section('content')
<form action="{{route('signin.auth')}}" method="post">
  @csrf
  <div class="login-form d-flex flex-column gap-1 gap-lg-2 mt-2 mt-lg-4 mt-4">
    <label for="email">Email</label>
    <input name="email" value="{{old('email')}}" class="form-control text-black" id="email"
      placeholder="Masukan email" />
    <div class="password-container">
      <label for="password">Password</label>
      <div class="pass-wrapper position-relative d-flex">
        <input name="password" type="password" class="form-control text-black" value="{{old('password')}}" id="password"
          placeholder="Masukan password" />
      </div>
    </div>
    <button class="btn btn-dark login-btn mt-1 mt-lg-2" type="submit">
      LOGIN
    </button>
    <a href="{{ route('password.request') }}" class="text-decoration-none mt-1 text-center text-secondary">Lupa kata sandi?</a>
    <button class="btn btn-light login-btn mt-1 mt-lg-2" type="button" onclick="window.location='{{ route('google.login') }}'">
      <img src="{{asset('Assets/Img/google-icon.png')}}" alt="Ikon Google" style="width: 20px; height: 20px; margin-right: 8px;">
      Login dengan Google
    </button>
    <div class="sign-up-wrapper mt-1 text-center text-secondary">Belum punya akun? <a href="{{route('signUp')}}"
        class="text-decoration-none text-black">Daftar</a></div>
  </div>
</form>
@endsection
