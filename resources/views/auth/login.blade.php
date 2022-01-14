<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name', 'StudyBuddy') }} | Sign In</title>
    <!-- CSS files -->
    <link href="{{asset('assets/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/demo.min.css')}}" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      @include('layouts.backend.partial.alert')
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        @if(session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
        <form method="POST" class="card card-md" action="{{ route('login') }}">
        @csrf
          <div class="card-body">
            <img src="{{asset('logo.jpg')}}" width="25%" class="d-block mx-auto">
            <h2 class="card-title text-center mb-4">Welcome to {{ config('app.name', 'StudyBuddy') }}</h2>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="{{ route('password.request') }}">I forgot password</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password" autocomplete="off">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Tabler Core -->
    <script src="{{asset('assets/js/tabler.min.js')}}"></script>
  </body>
</html>