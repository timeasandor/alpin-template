var scrollToTop = (function(){

    function bindEvents() {

        $(window).scroll(function(){

            if($(this).scrollTop() > 100) {
                $('#site-header-main').addClass('header-fixed');
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
                $('#site-header-main').removeClass('header-fixed');
            }
        });

        //Click event to scroll to top
        $('#toTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    }
    
    function initNavMobile() {

        $('#nav-toggle').on('click', function(){
            $('#mobile-menu').show().animate({
                left: "0"
            }, 500);
            //$('body').addClass("noscroll");
        });
        $('#nav-cancel').on('click', function(){
            $('#mobile-menu').animate({
                left: "100%"
            }, 500, function(){
                $(this).css("left","-100%").hide();
            });
            //$('body').removeClass("noscroll");
        });

    }

    function init() {
        bindEvents();
        initNavMobile();
    }

    return {
        init: init
    }

})();
scrollToTop.init();