@extends('layouts.frontend.app')

@section('metas')
<title>Become a Student | Fly</title>
@endsection

@section('content')

@php
    use App\Models\College;
    use App\Models\Subject;
    $colleges = College::all();
    $subjects = Subject::where('deleted_at',null)->get();
@endphp

<section class="page_heading_section pricing_heading">
    <div class="container">
        <h1 class="title">Student</h1>
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
                        <img src="{{asset('frontend/images/convenience.svg')}}" />
                    </span>
                    <h5 class="title">Convenience</h5>
                    <p>
                        Choose were when and how the tutoring session will take place.
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/statistic.svg')}}" />
                    </span>
                    <h5 class="title">Competitive pricing</h5>
                    <p>
                        Choose from a wide variety of prices to suit your financial need.
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single">
                    <span class="icon">
                        <img src="{{asset('frontend/images/low_fee.svg')}}" />
                    </span>
                    <h5 class="title">Low Fees</h5>
                    <p>
                        We only charge 5% service fee to students.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start become tutor section -->

<section class="become_tutor_section">
    <div class="container">
        @include('layouts.frontend.partials.alert')
        <form action="{{route('student-register')}}" method="POST" class="become_form">
            @csrf
            @method('POST')
            <div class="thumbnail">
                <input name="avatar" type="file" id="file" hidden />
                <label for="file">
                    <img class="preview" src="{{asset('frontend/images/thumbnail.png')}}" />
                    <img src="{{asset('frontend/images/camera.svg')}}" class="icon" />
                </label>
            </div>

            <div class="info">
                <h5 class="title">Student info</h5>
                <div class="row mx_-10">
                    <div class="col-md-6 form-group px_10">
                        <input name="first_name" required value="{{ old('first_name') }}"
                            class="form-control @error('first_name') is-invalid @enderror"
                            placeholder="First Name"
                        />
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="last_name" required value="{{ old('last_name') }}"
                            class="form-control @error('last_name') is-invalid @enderror"
                            placeholder="Last Name"
                        />
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="email" required value="{{ old('email') }}"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email Address"
                        />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="mobile" required value="{{ old('mobile') }}"
                            type="number"
                            class="form-control @error('mobile') is-invalid @enderror"
                            placeholder="Phone"
                        />
                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="date_of_birth" required value="{{ old('date_of_birth') }}"
                            type="date"
                            class="form-control @error('date_of_birth') is-invalid @enderror"
                            placeholder="Date of Birth"
                        />
                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <select class="form-control" name="college">
                            <option value="">-- Select College --</option>
                            @foreach($colleges as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                            @endforeach
                        </select>
                        @error('college')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="country" required value="{{ old('country') }}"
                            type="text"
                            class="form-control @error('country') is-invalid @enderror"
                            placeholder="Country"
                        />
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="city" required value="{{ old('city') }}"
                            type="text"
                            class="form-control @error('city') is-invalid @enderror"
                            placeholder="City"
                        />
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="headline" required value="{{ old('headline') }}"
                            type="text"
                            class="form-control @error('headline') is-invalid @enderror"
                            placeholder="Headline"
                        />
                        @error('headline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="introduction" required value="{{ old('introduction') }}"
                            type="text"
                            class="form-control @error('introduction') is-invalid @enderror"
                            placeholder="Your Introduction"
                        />
                        @error('introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="study">
                <h5 class="title">Select fields of study</h5>
                @foreach($subjects as $subject)
                <div class="single">
                    <input
                        type="checkbox" name="subject[]"
                        id="{{$subject->id}}"
                        value="{{$subject->id}}"
                        hidden
                    />
                    <label for="{{$subject->id}}">{{$subject->name}}</label>
                </div>
                @endforeach

                <div class="row mx_-10 mt_30 mt_sm_20">
                    <div class="col-md-6 form-group px_10">
                        <input name="password" required 
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password"
                        />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group px_10">
                        <input name="password_confirmation" required 
                            type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            placeholder="Confirm Password"
                        />
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <input type="submit" class="dark_btn submit_btn" value="Create Account"/>
            </div>
        </form>
    </div>
</section>
@endsection