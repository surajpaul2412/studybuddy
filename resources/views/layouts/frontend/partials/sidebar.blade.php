<div class="sidebar_menus">
    <ul>
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
        <li class="{{ Request::is('legal') ? 'active' : '' }}"><a href="{{route('legal')}}">Legal</a></li>
        <li class="{{ Request::is('become-tutor') ? 'active' : '' }}"><a href="{{route('become-tutor')}}">Tutor</a></li>
        <li class="{{ Request::is('become-student') ? 'active' : '' }}"><a href="{{route('become-student')}}">Student</a></li>
        <li class="{{ Request::is('university') ? 'active' : '' }}"><a href="{{route('university')}}">University</a></li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
        <li class="add-events-btn d-flex justify-content-between">
	        <a class="button dark_btn contact_btn col-9 text-center" target="_blank" href="https://accounts.google.com/ServiceLogin?service=cl&passive=1209600&osid=1&continue=https://calendar.google.com/calendar/r/eventedit?text%3DStudyBuddyFly%2BLaunch%2Bevent%26dates%3D20211201/20211202%26uid%3D618e357d67122f38e583b3a4%26details%3DStudyBuddyFly%2BLaunch%2Bevent%250A%250ALink:%2Bhttp://studybuddyfly.com&followup=https://calendar.google.com/calendar/r/eventedit?text%3DStudyBuddyFly%2BLaunch%2Bevent%26dates%3D20211201/20211202%26uid%3D618e357d67122f38e583b3a4%26details%3DStudyBuddyFly%2BLaunch%2Bevent%250A%250ALink:%2Bhttp://studybuddyfly.com&scc=1&authuser=0">
        		Add to calendar
	        </a>

	        <a class="button dark_btn contact_btn col-2 ml-2 align-items-center d-flex" download href="{{asset('studybuddyflyevent.ics')}}">
        		<img class="d-block mx-auto" src="{{asset('download.png')}}" width="60%" style="filter: brightness(0) invert(1);">
	        </a>
        </li>
    


        <li>
            <div class="counter text-white" align="center">                
                <div class="item">
                    <span id="days-sidebar"></span><span class="title">Days</span>
                </div>
                <div class="item">
                    <span id="hours-sidebar"></span><span class="title">Hours</span>
                </div>
                <div class="item">
                    <span id="minutes-sidebar"></span
                    ><span class="title">Minutes</span>
                </div>
                <div class="item">
                    <span id="seconds-sidebar"></span
                    ><span class="title">Seconds</span>
                </div>
            </div>
        </li>


    </ul>
	    <div class="buttons-bottom">
            <a href=""><button class="button dark_btn btn text-center"><img src="{{asset('frontend/images/apple.svg')}}" > App Store</button></a>
            <a href=""><button class="button dark_btn btn text-center"><img src="{{asset('frontend/images/playstore.svg')}}" > Play Store</button></a>
        </div>

</div>
