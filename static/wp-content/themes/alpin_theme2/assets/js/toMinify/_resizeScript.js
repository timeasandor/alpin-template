var resizeScreen = (function(){

    function bindEvents(){
        var headerH = $("#site-header-main").outerHeight();
        var footerH = $("footer").outerHeight();
        var imgH = $(".block-picture").outerHeight();
        var map = $("#map").outerHeight();
        var viewportH = $(window).height();

        if(imgH != undefined){
            var middleH = viewportH - (headerH + footerH) - imgH;
            console.log(middleH);
            $(".middle").height(middleH);
        }
        else if(map != undefined){
            var middleH = viewportH - (headerH + footerH) - map;
            console.log(middleH);
            $(".middle").height(middleH);
        }
        else {
            var middle = viewportH - (headerH + footerH);
            console.log(middle);
            $(".middle").height(middle);
        }
    }

    function init() {
        bindEvents();
    }

    return {
        init: init
    }

})();

$(document).ready(function(){
    resizeScreen.init();
});
