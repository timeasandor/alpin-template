var resizeScreen = (function(){

    function bindEvents(){
        var headerH = $("#site-header-main").outerHeight();
        console.log(headerH);
        var footerH = $("footer").outerHeight();
        console.log(footerH);
        var imgH = $(".block-picture").outerHeight();
        console.log(imgH);
        var viewportH = $(window).height();
        console.log(viewportH);

        if(imgH != undefined){
            var middleH = viewportH - (headerH + footerH) - imgH;
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