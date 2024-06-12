@extends('layouts.base-auth')

@section('asset-image')
<img src="{{asset('Assets/Img/update.jpg')}}" class="login-img" />
@endsection

@section('title', 'Forgot Password')

@section('content')
<form action="{{ route('password.email') }}" method="post">
    @csrf
    <div class="login-form d-flex flex-column gap-1 gap-lg-2 mt-2 mt-lg-4 mt-4">
        <label for="email">Email</label>
        <input name="email" value="{{ old('email') }}" class="form-control text-black" id="email" placeholder="Masukkan email" />
        <button class="btn btn-dark login-btn mt-1 mt-lg-2" type="submit">Kirim Link Reset Kata Sandi</button>
    </div>
</form>
@endsection
