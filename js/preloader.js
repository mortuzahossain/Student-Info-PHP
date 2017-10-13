(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();

        // preloader
		var preloader = $('.preloader');
		$(window).load(function(){
			preloader.remove();
		});
   
    });


    jQuery(window).load(function(){
    	// Portfolio galary image
		// zoomwall.create(document.getElementById('gallery'));
    });


}(jQuery));	