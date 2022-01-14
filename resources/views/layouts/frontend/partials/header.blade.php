<header>
    <div class="container">
        <div class="row mx-0">
            <div class="logo">
                <a href="{{route('/')}}"><img src="{{asset('frontend/images/logo.svg')}}"/></a>
            </div>

            <!-- change -->
            <div class="counter-cont fixed">
               <h2 class="text-white font-weight-bold">Nationwide Rollout ETA</h2>
                <div class="counter">				 
                    <div class="item">
                        <span id="days"></span><span class="title">Days</span>
                    </div>
                    <div class="item">
                        <span id="hours"></span><span class="title">Hours</span>
                    </div>
                    <div class="item">
                        <span id="minutes"></span
                        ><span class="title">Minutes</span>
                    </div>
                    <div class="item">
                        <span id="seconds"></span
                        ><span class="title">Seconds</span>
                    </div>
                </div>
			</div>
          

            <div class="hamburger_icon">
                <img src="{{asset('frontend/images/hamburger.svg')}}" />
            </div>
        </div>
    </div>
</header>