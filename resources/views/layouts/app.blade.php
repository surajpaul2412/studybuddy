<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <div class="page page-center" id="app">
      @include('layouts.backend.partial.alert')
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
        </div>

        @yield('content')

      </div>
    </div>
    <!-- Tabler Core -->
    <script src="{{asset('assets/js/tabler.min.js')}}"></script>
  </body>
</html>