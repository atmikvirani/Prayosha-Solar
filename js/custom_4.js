	
 // on ready function
  $(document).ready(function() {
	"use strict";

			
    // Preloader 
    jQuery(window).on('load', function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(350).fadeOut("slow");
    });

	

    //---------------- jQuery SlickNav / Onepage Mobile menu-----------//

    $('.mainmenu').slicknav({
        label: '',
        duration: 700,
        easingOpen: "easeOutBounce",
        prependTo: '#mobileMenu',
        closeOnClick: true
    });

  
	//----------- jQuery MeanMenu / Multipage Mobile menu----------//
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "992",
        meanMenuContainer: ".mobile-menu"
    });
	
	
	
		/*----------------------------
		wow js active
		------------------------------ */
			new WOW().init();
	
	  	//----------------------- SHOW HIDE LOGIN FORM JS -----------------------//
	
	
	$('#search_button').on("click", function(e) {
		$('#search_open').slideToggle();
		e.stopPropagation(); 
	});

	$(document).on("click", function(e){
		if(!(e.target.closest('#search_open'))){	
			$("#search_open").slideUp();   		
		}
   });
	 
	 
	 //--------------------up scroll js-----------------------------
							// ===== Scroll to Top ==== 
						$(window).scroll(function() {
							if ($(this).scrollTop() >= 100) {       
								$('#return-to-top').fadeIn(200);   
							} else {
								$('#return-to-top').fadeOut(200);  
							}
						});
						$('#return-to-top').on("click", function() {     
							$('body,html').animate({
								scrollTop : 0                
							}, 500);
						});
			// ===== Scroll to Top end ==== 
	 
				
				 // Main Slider Animation

        (function($) {

            //Function to animate slider captions 
            function doAnimations(elems) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function() {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function() {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load 
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel 
            $myCarousel.carousel();

            //Animate captions in first slide on page load 
            doAnimations($firstAnimatingElems);

            //Pause carousel  
            $myCarousel.carousel('pause');


            //Other slides to be animated on carousel slide event 
            $myCarousel.on('click slide.bs.carousel', function(e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });


        })(jQuery);
				
				
	 	 
				//----------- spectrum slider js -------------//
	
	$(document).ready(function() {
              $('.spectrum_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay:false,
				smartSpeed: 1200,
                responsiveClass: true,
				navText : ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: true
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
            })
			
			
					//----------- spectrum slider js -------------//
	
	$(document).ready(function() {
              $('.best_product_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay:false,
				smartSpeed: 1200,
                responsiveClass: true,
				navText : ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: true
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
            })
			
			
						//----------- partners slider js -------------//
	
	$(document).ready(function() {
              $('.partners_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay:false,
				smartSpeed: 1200,
                responsiveClass: true,
				navText : ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: true
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
            })
			
			
			
			 // Testimonial Slider js
    $(document).ready(function() {
            $('.sw_testimonials_slider .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: false,
                responsiveClass: true,
                smartSpeed: 1200,
                navText: ['<i class="flaticon-left-arrow" aria-hidden="true"></i>', '<i class="flaticon-right-arrow" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })

			
			
				//-------------- VENOBOX JS -------------//
            $('.venobox').venobox({
                numeratio: true,
                titleattr: 'data-title',
                titlePosition: 'top',
                spinner: 'wandering-cubes',
                spinColor: '#dbbb0a'
            });
			
				//--------------isotope active--------------//
	

			$(window).on("load", function() {
				/** this is come when complete page is fully loaded, including all frames, objects and images **/
	
				var $grid = $('.grid').isotope({
				itemSelector: '.grid-item',
				stagger: 30
			  });

			  $('.filter-demo').on( 'click', '.button', function() {
				var filterValue = $(this).attr('data-filter');
				$grid.isotope({ filter: filterValue });
			  });

			  // change is-checked class on buttons

			  $('.filter').each( function( i, buttonGroup ) {
				var $buttonGroup = $( buttonGroup );
				$buttonGroup.on( 'click', '.button', function() {
				  $buttonGroup.find('.is-checked').removeClass('is-checked');
				  $( this ).addClass('is-checked');
				});
			  });
			  
			});
			
			
				// Contact Form Submition
	function checkRequire(formId , targetResp){
		targetResp.html('');
		var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
		var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
		var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
		var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
		var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
		var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
		var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
		var check = 0;
		$('#er_msg').remove();
		var target = (typeof formId === 'object')? $(formId):$('#'+formId);
		target.find('input , textarea , select').each(function(){
			if($(this).hasClass('require')){
				if($(this).val().trim() === ''){
					check = 1;
					$(this).focus();
					targetResp.html('You missed out some fields.');
					$(this).addClass('error');
					return false;
				}else{
					$(this).removeClass('error');
				}
			}
			if($(this).val().trim() != ''){
				var valid = $(this).attr('data-valid');
				if(typeof valid != 'undefined'){
					if(!eval(valid).test($(this).val().trim())){
						$(this).addClass('error');
						$(this).focus();
						check = 1;
						targetResp.html($(this).attr('data-error'));
						return false;
					}else{
						$(this).removeClass('error');
					}
				}
			}
		});
		return check;
	}
	$(".submitForm").on("click", function() {
		var _this = $(this);
		var targetForm = _this.closest('form');
		var errroTarget = targetForm.find('.response');
		var check = checkRequire(targetForm , errroTarget);
		if(check === 0){
			var formDetail = new FormData(targetForm[0]);
			formDetail.append('form_type' , _this.attr('form-type'));
			$.ajax({
				method : 'post',
				url : 'ajax.php',
				data:formDetail,
				cache:false,
				contentType: false,
				processData: false
			}).done(function(resp){
				if(resp === 1){
					targetForm.find('input').val('');
					targetForm.find('textarea').val('');
					errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
				}else{
					errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
				}
			});
		}
	});
	
	
  			
    });