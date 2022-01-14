@extends('layouts.frontend.app')

@section('metas')
<title>Contact Us | Fly</title>
@endsection

@section('content')
<section class="page_heading_section contact_heading">
    <div class="container">
        <h1 class="title">Have Questions?</h1>
        @include('layouts.frontend.partials.counter')
    </div>
</section>
        
<section class="contact_data_section">
    <div class="container">
        @include('layouts.frontend.partials.alert')
        <div class="contact_box">
            <h3>Get In Touch</h3>

            <div class="row mx_-20">
                <div class="col-md-6 px_25">
                    <div class="form_col">
                        <h5>Leave us a message</h5>
                        <form action="{{route('contact-form')}}" method="POST" class="animated_form">
                            @csrf
                            @method('POST')
                            <div class="form-item form-group">
                                <input
                                    name="name"
                                    type="text"
                                    id="name"
                                    class="form-control item"
                                    autocomplete="off"
                                    required
                                />
                                <label for="name">Name</label>
                            </div>

                            <div class="form-item form-group">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control item"
                                    autocomplete="off"
                                    required
                                />
                                <label for="email">Email Address</label>
                            </div>

                            <div class="form-item form-group">
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-control item"
                                    required
                                ></textarea>
                                <label for="message"
                                    >Your Message</label
                                >
                            </div>

                            <div class="form-item form-group">
                                <input
                                    type="submit"
                                    value="Send"
                                    class="
                                        form-control
                                        send_btn
                                        dark_btn
                                    "
                                />
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 px_25">
                    <ul class="contents">
                        <li>
                            Located in Chicago IL
                        </li>
                        <li>
                            <a href="tel:+17733951824"
                                >+17733951824</a
                            >
                        </li>
                        <li>
                            <a href="mail:Flycommunity@studybuddyllc.com">
                                Flycommunity@studybuddyllc.com
                            </a>
                        </li>
                    </ul>

                    <ul class="social">
                        <li>
                            <a href="https://www.instagram.com/flycommunityllc/" target="_blank" title="Instagram"
                                ><img src="{{asset('frontend/images/social/instagram.svg')}}"
                            /></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/FLY-Study-with-a-Buddy-109254674827955" target="_blank" title="Facebook"
                                ><img src="{{asset('frontend/images/social/fb.svg')}}"
                            /></a>
                        </li>
                        
                        <li>
                            <a href="https://www.linkedin.com/in/fly-studywithabuddy" target="_blank" title="Linkedin"
                                ><img src="{{asset('frontend/images/social/linkedin.svg')}}"
                            /></a>
                        </li>
                        <li>
                            <a href="https://discord.gg/zttXMy5f" target="_blank" title="Discord"
                                ><img src="{{asset('frontend/images/social/discord.svg')}}"
                            /></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/FLYCommunityLLC" target="_blank" title="Twitter"
                                ><img src="{{asset('frontend/images/social/twitter.svg')}}"
                            /></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCp4HHBqQHpF7UlaNV4bhSuQ" target="_blank" title="Youtube"
                                ><img src="{{asset('frontend/images/social/Youtube.svg')}}"
                            /></a>
                        </li>
                        <li>
                        <a href="https://www.tiktok.com/@fly_study_with_a_buddy?lang=en" target="_blank" title="Tiktok">
                            <img src="{{asset('frontend/images/social/tiktok.svg')}}" />
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection