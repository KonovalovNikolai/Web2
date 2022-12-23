@extends('layouts.app')

@section('content')
    <main>
        <div class="modal-content">
            <p class="f32 center">Sign in</p>
            <hr>
            <form method="POST" class="form" action="{{ route('login') }}">
                @csrf

                <div class="field f20">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="field f20">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <a class="secondary f14 end" href="{{ route('password.request') }}">Forgot your password?</a>
                </div>

                <div class="remember-box">
                    <input type="checkbox" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember-me">Remember me</label>
                </div>

                <input class="f24 uppercase" type="submit" value="Sign In">
            </form>
    </main>
@endsection
