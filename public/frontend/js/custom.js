/** @format */

$(document).ready(function () {
    $(".sidebar_menus ul").niceScroll({
        cursorcolor: "#7799ff",
        cursorwidth: "5px",
        cursorborder: "none",
    });
});

const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minsEL = document.getElementById("minutes");
const secondsEL = document.getElementById("seconds");
const daysElSidebar = document.getElementById("days-sidebar");
const hoursElSidebar = document.getElementById("hours-sidebar");
const minsELSidebar = document.getElementById("minutes-sidebar");
const secondsELSidebar = document.getElementById("seconds-sidebar");

const newYears = "30 May 2022";

function countdown() {
    const newYearsDate = new Date(newYears);
    const currentDate = new Date();

    const totalSeconds = (newYearsDate - currentDate) / 1000;
    const minutes = Math.floor(totalSeconds / 60) % 60;
    const hours = Math.floor(totalSeconds / 3600) % 24;
    const days = Math.floor(totalSeconds / 3600 / 24);
    const seconds = Math.floor(totalSeconds) % 60;

    daysEl.innerText = days < 10 && days >= 0 ? `0${days}` : days;
    hoursEl.innerText = hours < 10 && hours >= 0  ? `0${hours}` : hours;
    minsEL.innerText = minutes < 10 && minutes >= 0  ? `0${minutes}` : minutes;
    secondsEL.innerText = seconds < 10 && seconds >= 0  ? `0${seconds}` : seconds;
    daysElSidebar.innerText = days < 10 && days >= 0 ? `0${days}` : days;
    hoursElSidebar.innerText = hours < 10 && hours >= 0  ? `0${hours}` : hours;
    minsELSidebar.innerText = minutes < 10 && minutes >= 0  ? `0${minutes}` : minutes;
    secondsELSidebar.innerText = seconds < 10 && seconds >= 0  ? `0${seconds}` : seconds;
}

setInterval(countdown, 1000);

$(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
        $("header").addClass("fixed");
        $(".page_heading_section .counter").addClass("fixed");
    } else {
        $("header").removeClass("fixed");
        $(".page_heading_section .counter").removeClass("fixed");
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
        $(".banner_section .counter").addClass("fixed");
    } else {
        $(".banner_section .counter").removeClass("fixed");
    }
});





$(document).ready(function () {
    $(".custom_toggle_btns").each(function () {
        const btn_overlay = '<span class="overlay"></span>';
        $(this).append(btn_overlay);

        const totalButtons = $(this).find(".button").length;
        console.log("totalbutton", totalButtons);

        const percent = 100 / totalButtons;

        $(this)
            .find(".button")
            .each(function (index, item) {
                $(item).on("click", function () {
                    $(this)
                        .closest(".custom_toggle_btns")
                        .attr("position", index);
                    $(this)
                        .parent()
                        .siblings(".overlay")
                        .css("left", index * percent + "%");
                });
            });
    });

    $(".hamburger_icon").on("click", function () {
        $(".sidebar_menus").addClass("show");

        if ($(".sidebar_menus").hasClass("show")) {
            $("body").addClass("modal_open");
            let backdrop = '<div class="backdrop"></div>';
            $("body").append(backdrop);
        }

        // close sidebar
        $(".backdrop").on("click", function () {
            $(".sidebar_menus").removeClass("show");
            $("body").removeClass("modal_open");
            $(".backdrop").remove();
        });
    });

    // VIDEO MODAL


    // $('.video_section .video').each(function(){
    //     var videoModal = "<div class='video-modal'></div>";
    //     var backdrop = "<div class='backdrop'></div>";
    //     var videoBody = "<div class='video-body'></div>";
    //     videoModal.append(videoBody)
    //     $('body').append(videoModal)
    //     const videoContent = this;
    //     // const cloneContent = $(this).clone().appendTo(videoBody);
    //     $('.video-body').append(videoContent);
    //     console.log(videoBody);
    //     // cloneContent.removeAttr('class').removeAttr('poster');
    //     // videoModal.append(videoBody);
    //     // videoModal.append(backdrop);
        
    // })


    $('.modal').on('shown.bs.modal', function (event) {
        $(this).find('.modal_video')[0].play();
    })

    $('.modal').on('hide.bs.modal', function (event) {
        $(this).find('.modal_video')[0].pause();
    })
});
