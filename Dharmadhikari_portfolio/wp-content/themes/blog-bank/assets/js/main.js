(function ($) {
	"use strict";
    
    //document ready function
    jQuery(document).ready(function($){


/*-----
Offset for Main Navigation
----------------------*/
        var MainNav = $('#mainNav');
        MainNav.affix({
            offset: {
                top: 100
            }
        });

$('ul li.menu-item-has-children.dropdown').append('<span class="caret"></span>')
  


/*-----
Owl carousel active for all Instagram carousel
----------------------*/
        var instaCarousel = $('.instagram-carousel');
        instaCarousel.owlCarousel({
            items:5,
            margin:0,
            stagePadding:0,
            smartSpeed:450,
            loop:true,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:5,
                }
            }
        });

/*-----
Owl carousel active for Related post
----------------------*/
        var relatedCarousel = $('.related-post');
        relatedCarousel.owlCarousel({
            items:3,
            margin:10,
            stagePadding:0,
            smartSpeed:450,
            loop:true,
            dots:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:3,
                }
            }
        });


/*-----
scrollreveal jQuery plugin
----------------------*/
window.sr = ScrollReveal();
sr.reveal('.bfade', {
        duration: 600,
        delay: 200
    });

/*-----
jQuery scroll up plugin
----------------------*/        
        $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'slide'
    });
 $("#mainNav").accessibleDropDown();
    


    });//End document ready function
   
    //window load
    jQuery(window).load(function(){
        
    /*Preloader*/
	var preeLoad = $('#loading');
	preeLoad.fadeOut(2000);

    });


    $.fn.accessibleDropDown = function () {
    var el = $(this);

    /* Make dropdown menus keyboard accessible */

    $("a", el).focus(function() {
        $(this).parents("li").addClass("hover");
    }).blur(function() {
        $(this).parents("li").removeClass("hover");
    });
}

}(jQuery));	


