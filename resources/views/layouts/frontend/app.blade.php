<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        @yield('metas')
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"/>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!-- css -->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
        @yield('css')
    </head>
    <body>
        @include('layouts.frontend.partials.header')

        @yield('content')

        <!-- footer -->
        @include('layouts.frontend.partials.footer')
        <!-- sidebar -->
        @include('layouts.frontend.partials.sidebar')

        <script src="https://unpkg.com/jquery@3.1.1/dist/jquery.js"></script>
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- <script src="https://areaaperta.com/nicescroll/js/jquery.nicescroll.min.js"></script> -->
        <script src="{{asset('frontend/js/custom.js')}}"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".testimonial_slider", {
                pagination: {
                    el: ".swiper-pagination",
					   clickable: true,
                },
				
            });
            
            window.addEventListener("DOMContentLoaded", (event) => {
                const video = document.getElementById("video");
                const circlePlayButton = document.querySelector(
                    ".video_section .play_icon"
                );
                function togglePlay() {
                    if (video.paused || video.ended) {
                        video.play();
                    } else {
                        video.pause();
                    }
                }
                circlePlayButton.addEventListener("click", togglePlay);
                video.addEventListener("playing", function () {
                    video.setAttribute("controls", true);
                    circlePlayButton.style.opacity = 0;
                });
                video.addEventListener("pause", function () {
                    circlePlayButton.style.opacity = 1;
                    video.removeAttribute("controls");
                });
            });
            // Autohide Alert
            window.setTimeout(function () {
              $(".alert")
                .fadeTo(500, 0)
                .slideUp(500, function () {
                  $(this).remove();
                });
            }, 3500);
        </script>
        @yield('script')
    </body>
</html>
