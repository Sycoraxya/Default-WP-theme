$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (window.innerWidth > 1040) {
        if (scroll > 80) {
            if (!$('#menu-wrapper').hasClass("fixed")) {
                $('#menu-wrapper').addClass("wrapper-fixed");
                $('#menu').addClass("menu-fixed");
                $('.menu-menu-1-container').addClass("container-fixed");
                $('#container').addClass("main-container-fixed");
                $('#header').addClass("header-fixed");
            }
        } else {
            if ($('#menu-wrapper').hasClass("wrapper-fixed")) {
                $('#menu-wrapper').removeClass("wrapper-fixed");
                $('#menu').removeClass("menu-fixed");
                $('.menu-menu-1-container').removeClass("container-fixed");
                $('#container').removeClass("main-container-fixed");
                $('#header').removeClass("header-fixed");
            }
        };
    } else if ($('#menu-wrapper').hasClass("wrapper-fixed")) {
        $('#menu-wrapper').removeClass("wrapper-fixed");
        $('#menu').removeClass("menu-fixed");
        $('.menu-menu-1-container').removeClass("container-fixed");
        $('#container').removeClass("main-container-fixed");
        $('#header').removeClass("header-fixed");
    }
});
$(window).resize(function (event) {
    var scroll = $(window).scrollTop();
    if (window.innerWidth > 1040) {
        if (scroll > 80) {
            if (!$('#menu-wrapper').hasClass("fixed")) {
                $('#menu-wrapper').addClass("wrapper-fixed");
                $('#menu').addClass("menu-fixed");
                $('.menu-menu-1-container').addClass("container-fixed");
                $('#container').addClass("main-container-fixed");
                $('#header').addClass("header-fixed");
            }
        } else {
            if ($('#menu-wrapper').hasClass("wrapper-fixed")) {
                $('#menu-wrapper').removeClass("wrapper-fixed");
                $('#menu').removeClass("menu-fixed");
                $('.menu-menu-1-container').removeClass("container-fixed");
                $('#container').removeClass("main-container-fixed");
                $('#header').removeClass("header-fixed");
            }
        };
    } else if ($('#menu-wrapper').hasClass("wrapper-fixed")) {
        $('#menu-wrapper').removeClass("wrapper-fixed");
        $('#menu').removeClass("menu-fixed");
        $('.menu-menu-1-container').removeClass("container-fixed");
        $('#container').removeClass("main-container-fixed");
        $('#header').removeClass("header-fixed");
    };

    if (window.innerWidth < 621) {
        if (!$('#mobile-menu').hasClass('mobile-menu-active')) {
            $('#mobile-menu').addClass('mobile-menu-active');
            $('#menu').addClass('menu-inactive');
        }
    } else {
        if ($('#mobile-menu').hasClass('mobile-menu-active')) {
            $('#mobile-menu').removeClass('mobile-menu-active');
            $('#menu').removeClass('menu-inactive');
        }
    }



});

$(document).ready(function () {
    $('.icon-search').click(function () {
        $('#search input#s').addClass('active');
        $('#search input#s').focus();
        $('input#searchsubmit').addClass('active');
    });
    $('#search input#s').blur(function () {
        $('#search input#s').removeClass('active');
        $('input#searchsubmit').removeClass('active');
    })
    if (window.innerWidth < 621) {
        if (!$('#mobile-menu').hasClass('mobile-menu-active')) {
            $('#mobile-menu').addClass('mobile-menu-active');
            $('#menu').addClass('menu-inactive');
        }
    } else {
        if ($('#mobile-menu').hasClass('mobile-menu-active')) {
            $('#mobile-menu').removeClass('mobile-menu-active');
            $('#menu').removeClass('menu-inactive');
        }
    }

});
$(document).on('touchstart click', '#mobile-menu.mobile-menu-active', function (event) {
    event.stopPropagation();
    event.preventDefault();
    if (event.handled !== true) {
        var menu_length = $('nav#menu > div#menu-wrapper > div').height();
        var menuLength = menu_length + 'px';
        if ($('#menu').hasClass('menu-inactive')) {
            $('#menu').addClass('menu-active menu');
            $('#menu').removeClass('menu-inactive');
            $('#menu.menu-active').height(menu_length);
        } else if (!$('#menu').hasClass('menu-inactive')) {
            $('#menu').removeClass('menu-active menu');
            $('#menu').addClass('menu-inactive');
            $('#menu.menu-inactive').height(0);
        }

        event.handled = true;
    } else {
        return false;
    }
});