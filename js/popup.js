
(function($) {
    "use strict";

    var revapi24;
    var tpj = jQuery;
	

	
	  // on ready function
    jQuery(document).ready(function($) {
	


				
//Video Play
	$('.play-trigger').magnificPopup({
        type: 'iframe'
      });
      $.extend(true, $.magnificPopup.defaults, {
        iframe: {
          patterns: {
            youtube: {
              index: 'youtube.com/',
              id: 'v=',
              src: 'http://www.youtube.com/embed/%id%?autoplay=1'
            }
          }
        }
      });

 			
    });

})(jQuery);

		