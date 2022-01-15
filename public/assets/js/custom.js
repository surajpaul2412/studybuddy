//.eq-close
$(window).load(function () {
    $(".col-quote").slideDown('slow').delay(1000);
    $(".eq-close").show();
});
$(".eq-close").click(function () {
    $(".col-quote").slideUp('slow').delay(1000);
    $(this).hide();
    $(".eq-open").show();
});
$(".eq-open").click(function () {
    $(".col-quote").slideDown('slow').delay(1000);
    $(this).hide();
    $(".eq-close").show();
});

jQuery(document).ready(function ($) {


    var topHead = $(".nav-header").outerHeight();

    var winHeight = $(window).height();

    $(".login-left").css("height", winHeight);

    $(".main-banner").css("margin-top", -topHead);
    var mainLog = (parseInt(winHeight) - parseInt(topHead));
    var packHeigt = $(".tour-pcckk").outerHeight();
    var featreHieght = (parseInt(packHeigt) + parseInt(topHead));
    //alert(topHead);


    // if ($(window).height() < 900) {
    // $(".main-banner").css("height", winHeight);

    // }
    var rytHeight = $(".abt-left-block2").height();
    //alert(rytHeight);
    $(".abt-right-block2").css("height", rytHeight + 'px');


    $('ul.login-menu li.dropdown').hover(function () {
        //$(this).removeClass("open").toggleClass("open");
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
    });


    $(window).on("load scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll > 0) {
            $("header").addClass("navbar-fixed-top");
            // $(".top-header").css("margin-bottom", navHead);

        } else {
            $("header").removeClass("navbar-fixed-top");
            // $(".top-header").css("margin-bottom", 0);
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    //  $('.arrow-btn').click(function(){
    //     $("html, body").animate({
    //     scrollTop: $('.copyspace').offset().top -100
    // }, 1000);
    //     return false;
    // });

    $("a.mouse").on('click', function (event) {
        $('html,body').animate({
            scrollTop: $("#riverride").offset().top,
        }, 2000);
    });


    $("#owl-home").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 1,
        pagination: false,
        paginationNumbers: false,
        navigation: true,
        loop: true,
        // itemsDesktop: [1199, 3],
        // itemsDesktopSmall: [979, 3]
    });
    $("#pack-slider").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 3,
        pagination: false,
        paginationNumbers: false,
        navigation: true,
        loop: true,
        // itemsDesktop: [1199, 3],
        // itemsDesktopSmall: [979, 3]
    });
    $("#new-launch").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 3,
        pagination: false,
        paginationNumbers: false,
        navigation: true,
        loop: true,
        // itemsDesktop: [1199, 3],
        // itemsDesktopSmall: [979, 3]
    });
    $("#client-home").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 5,
        pagination: false,
        paginationNumbers: false,
        navigation: true,
        loop: true,
        // itemsDesktop: [1199, 3],
        // itemsDesktopSmall: [979, 3]
    });
    $("#side-launch").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 1,
        pagination: false,
        paginationNumbers: false,
        navigation: true,
        loop: true,
        // itemsDesktop: [1199, 3],
        // itemsDesktopSmall: [979, 3]
    });
    $("#testimonials-carousel").owlCarousel({
        singleItem: true,
        autoPlay: true,
        navigation: true,
        navigationText: [, ]
    });
    $("#twitter-carousel").owlCarousel({
        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 1,
        pagination: true,
        paginationNumbers: false,
        navigation: false,
        loop: true,
    });
    $('.gallery-space').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },


    });

    // $('.bxslider').bxSlider({
    //     infiniteLoop: false,
    //     hideControlOnEnd: true,
    //     controls: false,
    //     pagerCustom: '.customconrols',
    //     nextSelector: '#slider-next',
    //     prevSelector: '#slider-prev',
    //     nextText: 'Onward →',
    //     prevText: '← Go back'
    // });

    // $('.bxslider').magnificPopup({
    //     delegate: 'a',
    //     type: 'image',
    //     tLoading: 'Loading image #%curr%...',
    //     mainClass: 'mfp-img-mobile',
    //     gallery: {
    //         enabled: true,
    //         navigateByImgClick: true,
    //         preload: [0,1] 
    //     },  
    // });


    $('.planvieww').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: false,
            navigateByImgClick: false,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },


    });
    $('.tabbing li a').click(function () {
        $(".tabbing li a").parent("li").removeClass("active");
        $(this).parent("li").addClass("active");
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - featreHieght,
        }, 2000);
        return false;
    });

    $(".inner-header").before("<div class='hedheight'></div>");
    $(".hedheight").css("height", topHead + "px");


    (function () {
        var parallax = document.querySelectorAll(".parallax"),
            speed = 0.18;
        window.onscroll = function () {
            [].slice.call(parallax).forEach(function (el, i) {
                var windowYOffset = window.pageYOffset,
                    elBackgrounPos = "0 " + (-windowYOffset * speed) + "px";
                el.style.backgroundPosition = elBackgrounPos;
            });
        };
    })();
});
//new WOW().init();