/**
 * jquery.captec.lightbox - jQuery Lightbox for Captec Systems
 *
 *
 * @version 1 (10. Feb 2014)
 * @author Miramar Group - http://wwww.miramar-group.co.uk
 * @requires jQuery
 *
 */
 
 
 jQuery(document).ready(function($) {
  

  var current, size;
  
  $('.lightboxTrigger').click(function(e) {
    e.preventDefault();
    var image_href = $(this).attr("href");  
    var slideNum = $('.lightboxTrigger').index(this);
  
    if ($('#lightbox').length > 0) {      
      // #lightbox exists
      $('#lightbox').fadeIn(300);
      // #lightbox does not exist - create and insert (runs 1st time only)
    } else {                                

      var lightbox =
          '<div id="lightbox">' +
          '<p>Close</p>' +
          '<div id="slideshow">' +
          '</div>' +
          '</div>';
      

	if (Modernizr.touch == false) {
      $('body').append(lightbox);
    }
     
      $('.imageSet').find('.lightboxTrigger').each(function() {
      	//$('#thumb-1.imageSet').find('.lightboxTrigger');
        var $href = $(this).attr('href');
        $('#slideshow').append(
          '<img src="' + $href + '">'
        );
      });
      
    }
    

    size = $('#slideshow img').length;
    

    $('#slideshow img').hide();
    $('#slideshow img:eq(' + slideNum + ')').show();
    

    current = slideNum;
  });
  
  //Click anywhere on the page to get rid of lightbox window
  $('body').on('click', '#lightbox', function() { 
    $('#lightbox').fadeOut(300);
  });
    
  $(document.documentElement).keyup(function (event) {
  
    var $this = $(this);
    var dest;
    
  if (event.keyCode == 27) {
        $('#lightbox').fadeOut(300);
   } 
  
  
  
  else if (event.keyCode == 39) {
      dest = current + 1;
      if (dest > size - 1) {
        dest = 0;
      }

  }
    
    // update current slide
    current = dest;
 
  
  });






  
});