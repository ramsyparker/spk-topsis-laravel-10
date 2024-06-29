@extends('layouts.base')

@section('content')
<div class="container">
    <h2>Profile</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form untuk mengubah username -->
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->name }}" required>
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ganti username</button>
    </form>
    <hr>
    <!-- Form untuk mengubah password -->
    <form action="{{ route('profile.updatePassword') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="current_password" class="form-label">Password saat ini</label>
            <input type="password" class="form-control" id="current_password" name="current_password" required>
            @error('current_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="new_password" class="form-label">Masukan Password Baru</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
            @error('new_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Ganti Password</button>
    </form>
</div>
@endsection
