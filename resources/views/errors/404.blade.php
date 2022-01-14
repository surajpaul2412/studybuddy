@extends('layouts.frontend.app')

@section('metas')
<title>404 | Fly</title>
@endsection

@section('content')
<section class="page_heading_section about_heading">
    <div class="container">
        <h1 class="title">OOPS !</h1>
        @include('layouts.frontend.partials.counter')
    </div>
</section>

<section class="services_section about_services">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-rescenter col-12">
               
                    
                        <h1 class="four-o-four">404</h1>
                        <h4 class="semitesx">Sorry, we can't find the page you 
were looking for </h4>
<a class="dark_btn download_btn" href="#">
                        Go to homepage
                    </a>
             
            </div>

            <div class="col-md-6 col-12">
                <img src="{{asset('404-icon.jpg')}}" width="100%">
            </div>
        </div>
    </div>
</section>
@endsection
