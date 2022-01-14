@extends('layouts.app')

@section('content')
<form method="POST" class="card card-md" action="{{ route('password.email') }}">
    @csrf
    <div class="card-body">
        <img src="{{asset('logo.jpg')}}" width="25%" class="d-block mx-auto">
        <h2 class="card-title text-center mb-4">Forget Password ?</h2>
        <div class="mb-3">
            <label class="form-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">{{ __('Send Password Reset Link') }}</button>
        </div>
      </div>
</form>
@endsection
