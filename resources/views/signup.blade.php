@extends('layouts.base-auth')

@section('asset-image')
<img src="{{ asset('Assets/Img/signUp.jpg') }}" class="login-img" />
@endsection

@section('title', 'Sign Up')

@section('content')
<form action="{{ route('signUp.store') }}" method="post">
  @csrf
  <div class="login-form d-flex flex-column gap-1 gap-lg-2 mt-2 mt-lg-4 mt-4">
    <div class="name-container">
      <label for="name">Nama</label>
      <input name="name" type="text" value="{{ old('name') }}" class="form-control text-black" id="name"
        placeholder="Masukan nama" />
    </div>
    <div class="email-container">
      <label for="email">Email</label>
      <input name="email" type="email" value="{{ old('email') }}" class="form-control text-black" id="email"
        placeholder="Masukan email" />
    </div>
    <div class="password-container">
      <label for="password">Password</label>
      <div class="pass-wrapper position-relative d-flex">
        <input name="password" type="password" class="form-control text-black" id="password"
          placeholder="Masukan password" />
      </div>
    </div>
    <button class="btn btn-dark login-btn mt-1 mt-lg-2" type="submit">
      Sign Up
    </button>
    <div class="sign-up-wrapper mt-1 text-center text-secondary">Sudah punya akun? <a href="{{ route('signIn') }}"
        class="text-decoration-none text-black">Masuk</a></div>
  </div>
</form>
@endsection