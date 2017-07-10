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

        //add class for scroll menu

        var menu = $('.menu-desktop ul li a');
       // menu.addClass('page-scroll');

    }

    function scrollSmooth() {
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');

            var target = this.hash,
                //menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+2
            }, 800, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    }

    function onScroll(event){
       // e.defaultPrevented();
        var scrollPos = $(document).scrollTop() + 50;
        console.log(scrollPos);
        $('.menu-desktop a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            var posTop = refElement.position().top;
            console.log(posTop);
            console.log(refElement.outerHeight());
            if (posTop <= scrollPos && posTop + refElement.height() > scrollPos) {
                $('.menu-desktop ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
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