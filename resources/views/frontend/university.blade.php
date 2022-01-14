@extends('layouts.frontend.app')

@section('metas')
<title>University | Fly</title>
@endsection

@section('content')
<section class="page_heading_section about_heading">
    <div class="container">
        <h1 class="title">University</h1>
        <p>Transporting Education into the Digital Age</p>
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
                        Help us build an even stronger and vibrant community inside your campus.
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
                        University tutors can see the time and number of students that will be attending.
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/opportunity.svg')}}" />
                    </span>
                    <h5 class="title">Opportunity</h5>
                    <p>
                        Allow your students to become student tutors easily.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="belief_section">
    <div class="container">
        <h3>
            Join the swarm and help pave the way to a more vibrant and confident student community”
        </h3>
        <a href="{{URL('contact')}}" class="btn">Contact Us</a>

        <div class="row options_row">
            <div class="col-md-4 mb_sm_10">
                <p>Fully organized UI components</p>
            </div>
            <div class="col-md-4 mb_sm_10">
                <p>License to use on multiple projects</p>
            </div>
            <div class="col-md-4 mb_sm_10">
                <p>Clean, Minimal & Modern Design</p>
            </div>
        </div>
    </div>
</section>
@endsection