@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="row justify-content-center">
        <form class="form-signin text-center" method="POST" action="{{ route('register') }}">
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please register</h1>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email" class="sr-only">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password" class="sr-only">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
            <br>

            <button type="submit" class="btn btn-lg btn-primary btn-block">
                {{ __('Register') }}
            </button>
        </form>
    </div>
</div>
@endsection
