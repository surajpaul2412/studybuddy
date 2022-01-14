@extends('layouts.frontend.app')

@section('metas')
<title>About Us | Fly</title>
@endsection

@section('content')
<section class="page_heading_section about_heading">
    <div class="container">
        <h1 class="title">About Study Buddy LLC</h1>
        <p>Transport your education into the digital age</p>
        @include('layouts.frontend.partials.counter')
    </div>
</section>

@include('layouts.frontend.partials.video')

<section class="services_section about_services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/community_icon.svg')}}" />
                    </span>
                    <h5 class="title">Community</h5>
                    <p>
                        Fallow your classmates and create the best study
                        group
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/access_icon.svg')}}" />
                    </span>
                    <h5 class="title">Access</h5>
                    <p>
                        With a variety of tutors and open market
                        pricing, order a tutor that best suites your
                        needs
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/build_icon.svg')}}" />
                    </span>
                    <h5 class="title">User Friendly</h5>
                    <p>
                        Get the help you deserve at a click of a button
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/availibility.svg')}}" />
                    </span>
                    <h5 class="title">Opportunity</h5>
                    <p>
                        With a service charge of only 10%, Fly is the
                        perfect side job or professional business
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/flexibility_icon.svg')}}" />
                    </span>
                    <h5 class="title">Flexibility</h5>
                    <p>
                        Choose the avliablity and pay that best
                        complements your expertise
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/organization_icon.svg')}}" />
                    </span>
                    <h5 class="title">Organization</h5>
                    <p>
                        Upload files in the digital backpack, analyze
                        earnings, and track tutoring session
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="become_section">
    <div class="left_col box">
        <div class="content">
            <h4>Tutor</h4>
            <p class="mb-4">Start your business at a click of a button</p>
            <a href="{{route('become-student')}}" class="join_btn">Join Now</a>
        </div>
    </div>

    <div class="right_col box">
        <div class="content">
            <h4>Student</h4>
            <p class="mb-4">Start your business at a click of a button</p>
            <a href="{{route('become-tutor')}}" class="join_btn">Join Now</a>
        </div>
    </div>
</section>
@endsection
