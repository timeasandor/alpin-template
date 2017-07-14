var scrollToTop = (function(){

    function bindEvents() {

        $(window).scroll(function(){

            if($(this).scrollTop() > 100) {
                $('#site-header-main').addClass('header-fixed');
                $('.logo').css('visibility', 'visible');
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
                $('#site-header-main').removeClass('header-fixed');
                $('.logo').css('visibility', 'hidden');
            }
        });

        //Click event to scroll to top
        $('#toTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

        //init skrollr
        //var s = skrollr.init();

    }

    function scrollSmooth() {

        var sections = $('section')
            , nav = $('.menu-desktop ul li')
            , nav_height = nav.outerHeight();

        $(document).on('scroll', function () {
            var cur_pos = $(this).scrollTop();

            sections.each(function() {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
                }
            });
        });

        nav.find('a').on('click', function () {
            var $el = $(this)
                , id = $el.attr('href');

            $('html, body').animate({
                scrollTop: $(id).offset().top - nav_height
            }, 500);

            return false;
        });
    }

    function initNavMobile() {

        $('#nav-toggle').on('click', function(){
            $('#mobile-menu').show().animate({
                left: "0"
            }, 500);
            $('.logo').hide();

        });
        $('#nav-cancel').on('click', function(){
            $('#mobile-menu').animate({
                left: "100%"
            }, 500, function(){
                $(this).css("left","-100%").hide();
                $('.logo').show();
            });
        });
        $('.menu-mob ul li a').on('click', function(){
            $('#mobile-menu').animate({
                left: "100%"
            }, 500, function(){
                $(this).css("left","-100%").hide();
                $('.logo').show();
            });
        });
    }


    function init() {
        bindEvents();
        initNavMobile();
        scrollSmooth();
    }

    return {
        init: init
    }

})();
$(document).ready(function(){
    scrollToTop.init();
});