$(document).ready(function () {
    $(".menu_add").on("click", function () {
        $(this).addClass("current");
        $(this).siblings().removeClass("current");
    });
    $('.hamburger').on('click', function (e) {
        e.preventDefault();
        $('.hamburger').toggleClass('animate');
        $('.bar').toggleClass('animate');
        $('.menu_global').toggleClass('hide_menu show_menu');
    });
    $('#switcher_confironce').owlCarousel({
        items: 2,
        loop: true,
        dots: false,
        nav: false,
        autoplay: true,
        responsiveClass: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
            },
            500: {
                items: 3,
            },
            767: {
                items: 4,
            },
            992: {
                items: 5,
            }
        }
    });
    $('#nos_services_home').owlCarousel({
        items: 2,
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        stagePadding: 40,
        autoplay: true,
        responsiveClass: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            500: {
                items: 1,
                stagePadding: 70,
            },
            767: {
                items: 2,
                stagePadding: 10,
            },
            992: {
                items: 2,
                stagePadding: 40,
            }
        }
    });

    new WOW().init();
});