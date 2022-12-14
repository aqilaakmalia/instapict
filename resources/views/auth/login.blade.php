@extends('layouts.authlayout')

@section('form')
    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-34">
            Login
        </span>


        @error('email')
            <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
        @enderror
        <div class="wrap-input100 validate-input m-b-20 rounded-pill" data-validate="Type user name">
            <input id="email" class="input100 rounded-pill @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
            <span class="focus-input100 rounded-pill"></span>
        </div>

        @error('password')
            <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
        @enderror
        <div class="wrap-input100 validate-input m-b-20 rounded-pill" data-validate="Type password">
            <input id="password" class="input100 rounded-pill @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
            <span class="focus-input100 rounded-pill"></span>
        </div>

        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn rounded-pill">
                <span class="spinner-border spinner-border-sm d-none mr-1" role="status" aria-hidden="true"></span>
                Sign in
            </button>
        </div>

        <div class="w-full text-center p-t-27 p-b-100">
            @if (Route::has('password.request'))
                <span class="txt1">
                    Forgot
                </span>

                <a href="{{ route('password.request') }}" class="txt2">
                    Username / password?
                </a>
            @endif
        </div>

        <div class="w-full text-center">
            <a href="{{ route('register') }}" class="txt3">
                Sign Up
            </a>
        </div>
    </form>
@endsection