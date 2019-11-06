(function ($) {
	"use strict";

    $(document).ready(function(){

      $("a[href^='#']").click(function(e) {
            e.preventDefault();
            var position = $($(this).attr("href")).offset().top;

            $("body, html").animate({
                scrollTop: position
            });
        });

    });

    $(document).ready(function() {
    $('.popup-youtube-left, .popup-youtube-right').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });

}(jQuery));