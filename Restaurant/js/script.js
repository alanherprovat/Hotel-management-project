$(document).ready(function(){

    // aos (animate on scroll)
    //AOS.init();

    // navbar toggling
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle();
    });
    $(window).scroll(function(){
        let position = $(window).scrollTop();
        if(position >= 80){
            $('.navbar').addClass('bg-navbar');
        } else {
            $('.navbar').removeClass('bg-navbar');
        }
    });
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });
    });

});