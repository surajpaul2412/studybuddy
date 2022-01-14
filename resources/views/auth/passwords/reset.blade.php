@extends('layouts.app')

@section('content')
<form method="POST" class="card card-md" action="{{ route('password.update') }}">
    @csrf
    <div class="card-body">
        <input type="hidden" name="token" value="{{ $token }}">
        <img src="{{asset('logo.jpg')}}" width="25%" class="d-block mx-auto">
        <h2 class="card-title text-center mb-4">Reset Your Password</h2>
        <div class="mb-3">
          <label class="form-label">Your Email address</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-2">
          <label class="form-label"> New Password</label>
          <div class="input-group input-group-flat">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="mb-2">
          <label class="form-label">{{ __('Confirm Password') }}</label>
          <div class="input-group input-group-flat">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">{{ __('Reset Password') }}</button>
        </div>
    </div>
</form>
@endsection
