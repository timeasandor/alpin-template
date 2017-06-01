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

    function init() {
        bindEvents();
    }

    return {
        init: init
    }

})();
scrollToTop.init();