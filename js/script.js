(function ($) {
	"use strict";
	
	// scroll to top
				
				$(document).ready(function(){
					
					
					$('.carousel-inner .item:first-child').addClass('active');
					$('.carousel-indicators li:first-child').addClass('active');
					
					
				});
				
				$('.totop a').click(function(){
			
				
					$('html, body').animate({'scrollTop': '0px'},2000);
				
					return false;
				
				});
				$(window).scroll(function(){
			
			
				if($(window).scrollTop() > 500){
				
					$('.totop a').fadeIn(1000);
				
				
				}else{
				
				$('.totop a').fadeOut(1000);
				
				}
			
			
			
				});
				
				// scroll to top
				
				
				
				var wow = new WOW(
				  {
					animateClass: 'animated',
					offset:       100,
					callback:     function(box) {
					  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
					}
				  }
				);
				
				wow.init();
				

			$(window).scroll(function() {
				if ($(window).scrollTop() > 150) {
					$(".navbar").addClass("sticky");
				} 
				else {
					$(".navbar").removeClass("sticky");
				}
			});
		  
			$(".navbar-toggle").click(function() {
				$(this).toggleClass('in');
				$('.navbar-collapse').toggleClass('in');
			});

			$(document).ready(function(){
			
			
			 $('ul.member-menu ul.dropdown-menu li a').each(function() {
				if ( $(this).parent('li').children('ul').size() > 0 ) {
					$(this).append('<span class="glyphicon glyphicon-chevron-right"></span>');
				}           
			});
			
			 $('#secondary-menu ul.navbar-nav ul.sub-menu li a').each(function() {
				if ( $(this).parent('li').children('ul').size() > 0 ) {
					$(this).append('<span class="glyphicon glyphicon-chevron-right"></span>');
				}           
			});
			
			
			  
			  
			  // search box
				
				$('#search-trigger').click(function(){
                    $('#search-input').toggleClass('search-input-open');
                    $('.navbar.navbar-default.navbar-bottom ul li a').toggleClass('change-hobe');
                    
                });
 
                $(document).click(function(e){
                    if(!$(e.target).closest('.ngen-search-form').length){
                        $('#search-input').removeClass('search-input-open');
						$('.navbar.navbar-default.navbar-bottom ul li a').removeClass('change-hobe');
                    }
                })


				// search box
				
				
				
				
				
			  
			
		
			
	});

}(jQuery));