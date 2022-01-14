@extends('layouts.frontend.app')

@section('metas')
<title>Fly</title>
@endsection

@section('content')
<style>
.testimonial_section .content_col::after {
    position: absolute;
    content: "";
    height: 30px;
    width: 30px;
    background: url("https://www.studybuddyfly.com/frontend/images/quote.png") no-repeat center;
    right: 0;
    top: 0;
    transform: rotate(-180deg);}
</style>

<section class="banner_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text_col">
                <div class="box">
                    <h1>Transporting Education Into the Digital Age</h1>
                    <ul>
                        <li>Build your Community</li>
                        <li>Hire your Tutors</li>
                        <li>Pass your Classes</li>
                    </ul>
                    <button class="dark_btn download_btn">
                        Download FLY now!
                    </button>
                    @include('layouts.frontend.partials.counter')
                </div>
            </div>

            <div class="col-lg-6 image_col">
                <div class="box">
                    <img src="{{asset('frontend/images/banner_img.png')}}" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="created_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left_content">
                    <h3 class="section_title">
                        Created By Students For Students
                    </h3>
                    <ul>
                        <li>
                            <span class="icon">
                                <img src="{{asset('frontend/images/build_icon.svg')}}" />
                            </span>
                            <h6 class="title">Build your community</h6>
                            <p>
                                Follow your classmates to succeed
                                together
                            </p>
                        </li>

                        <li>
                            <span class="icon">
                                <img src="{{asset('frontend/images/hire_icon.svg')}}" />
                            </span>
                            <h6 class="title">Hire your tutors</h6>
                            <p>
                                Pick a student or professional tutor to
                                help you on your journey
                            </p>
                        </li>

                        <li>
                            <span class="icon">
                                <img
                                    src="{{asset('frontend/images/build_business_icon.svg')}}"
                                />
                            </span>
                            <h6 class="title">Build your business</h6>
                            <p>
                                Opportunity to build a business or a
                                side hustle.
                            </p>
                        </li>

                        <li>
                            <span class="icon">
                                <img src="{{asset('frontend/images/organize_icon.svg')}}" />
                            </span>
                            <h6 class="title">
                                Organize your university tutors
                            </h6>
                            <p>
                                Universities can partner with Fly to
                                create a user friendly experience for
                                both there students and tutors.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 px-0 right_col">
            </div>
        </div>
    </div>
</section>

<!-- testimonial section -->
@php        
    use App\Models\Testimonial;
    $testimonials = Testimonial::whereIsActive(1)->get();
@endphp
<section class="testimonial_section">
    <div class="container">
        <div class="swiper testimonial_slider">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="user_col">
                        <figure>
                            <img src="{{asset('uploads/testimonial')}}/{{$testimonial->avatar}}" />
                        </figure>
                        <span class="user_detail">
                            <h6 class="name">{{$testimonial->name}}</h6>
                            <p class="type">{{$testimonial->designation}}</p>
                        </span>
                    </div>
                    <div class="content_col" align="center">
                        <p>{!! $testimonial->content !!}</p>
                    </div>                    
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- app section -->
<section class="app_section gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image_col">
                <figure>
                    <img src="{{asset('frontend/images/app_image.png')}}" />
                </figure>
            </div>

            <div class="col-md-6 right_col">
                <div class="content">
                    <p>Transform your education</p>
                    <h3 class="title">Build Your Business</h3>
                    <button class="dark_btn download_btn">
                        Download FLY now!
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- steps section -->
<section class="steps_section">
    <div class="container">
        <h3 class="title">Put the power back in your hands</h3>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="single">
                    <div class="icon">
                        <img src="{{asset('frontend/images/availibility.svg')}}" />
                    </div>
                    <h6 class="title">Set your avliability</h6>
                    <p>
                        Tutors set there own availability and can accept or deny tutoring requests.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="single">
                    <div class="icon">
                        <img src="{{asset('frontend/images/price_tag.svg')}}" />
                    </div>
                    <h6 class="title">set your price</h6>
                    <p>
                        Open market pricing and low service fees allows tutors to set the price they want.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="single">
                    <div class="icon">
                        <img src="{{asset('frontend/images/progress.svg')}}" />
                    </div>
                    <h6 class="title">Track your progress</h6>
                    <p>
                        Tutors are given statistics on how they're doing and what days they perform the best.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="single">
                    <div class="icon">
                        <img src="{{asset('frontend/images/grow.svg')}}" />
                    </div>
                    <h6 class="title">Grow your business</h6>
                    <p>
                        The better the stars the more traffic you will incur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- newsletter section -->
<section class="newsletter_section">
    <div class="container">
        <div class="box">
            <div class="text_col">
                <h3 class="title">
                    Get more information on how you can help
                </h3>
                @include('layouts.frontend.partials.alert')
            </div>

            <div class="form_col" id="newsletter">
                <form action="{{route('newsletter')}}" method="POST">
                    @csrf
                    <div class="input_group">
                        <input name="email" required
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Enter your email address"
                        />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input
                            type="submit"
                            class="button dark_btn submit_btn"
                            value="Submit"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- contact section -->
<section class="contact_section">
    <div class="container">
        <h3 class="title">
            Help Your University Transition Into The Digital Age
        </h3>
        <a class="button dark_btn contact_btn" href="{{route('contact')}}"
            >Contact us to see how you can help
        </a>
    </div>
</section>
<!-- <a href="https://add.eventable.com/events/618e35753fbd4f1b3fe5154a/618e357d67122f38e583b3a4" class="eventable-link" target="_blank" data-key="618e35753fbd4f1b3fe5154a" data-event="618e357d67122f38e583b3a4" data-style="3">Add to Calendar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://plugins.eventable.com/eventable.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script', 'eventable-script');</script> -->
@endsection
