var overlay = (function(){

    var nr_slides = 0;
    var this_articles;
    var t_gallery = null;
    var actual_index;


    var onClose = function(){
      $('.overlay-gallery .close-btn').on('click', function(){
            $('.overlay-gallery').removeClass('active');
      });
    };

    var buildGallery = function(parent, from_index){
        var output='<div class="swiper-container">';

        this_articles = parent.find('img');

        nr_slides = this_articles.length;

        output+='<div class="swiper-wrapper" style="width:80%;">';

        for (var i=0;i<nr_slides;i++) {
            var this_img = $(this_articles[i]).attr("src");

            if (typeof(this_img) !== "undefined") {
                output+='<div class="swiper-slide"><img src="'+this_img+'" alt=""></div>';
            }
        }

        output+='</div></div>';

        $(".overlay-gallery .overlay_swiper").html(output);

    };

    var initSwiper = function(from_index){
        t_gallery = $(".overlay_swiper .swiper-container").swiper({
            slidesPerView:'1',
            watchActiveIndex:false,
            centeredSlides:true,
            pagination:true,
            nextButton: '.overlay-gallery .b-next',
            prevButton: '.overlay-gallery .b-prev',
            resizeReInit:false,
            effect: 'fade',
            loop: true,
            initialSlide:from_index
        });
        $(".overlay-gallery").addClass("active");
    };


    var onClick = function(){

        $(".lp-boxes").on("click","img",function() {
            actual_index = ($(this).attr('tabindex') - 1);
            var this_parent = $(this).parents(".lp-boxes");
            buildGallery(this_parent,actual_index);
            initSwiper(actual_index);
        });

        $(".overlay-gallery .b-next").on("click",function() {
            t_gallery.slideNext();
        });

        $(".overlay-gallery .b-prev").on("click",function() {
            t_gallery.slidePrev();
        });
        $(document).on("keyup",function(e) {
            if ((t_gallery !== null) && (e.keyCode === 37)) {
                t_gallery.slidePrev();
            }
            if ((t_gallery !== null) && (e.keyCode === 39)) {
                t_gallery.slideNext();
            }
        });
    };

    return {
        close: onClose,
        bindEvents: onClick
    };
})();

overlay.close();
overlay.bindEvents();

