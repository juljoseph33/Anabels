$(document).ready(function() {
	$('#nav').scrollToFixed();
	var icons = {
      header: "sideArrow",
      activeHeader: "downArrow"
    };
    $( "#accordion" ).accordion({
    	icons: icons,
    	collapsable: true,
    	heightStyle: "content"
    });
	$('#picturelink').find('a').css('border', 'none');
	// $('#nav').fixTo('body');
	var param = $('#f').offset().top - $('#f').innerHeight();
	$(window).scroll(function() {
		 fade();
	    if ($(window).scrollTop() > param) {
	        $('#headerpic').attr('src', "img/ANABELSLOGO.png");
	        $('#headerpic').css({
	        	width : '90%',
	        	WebkitTransition : 'width 0.3s ease-in-out',
    			MozTransition    : 'width 0.3s ease-in-out',
    			MsTransition     : 'width 0.3s ease-in-out',
    			OTransition      : 'width 0.3s ease-in-out',
    			transition       : 'width 0.3s ease-in-out'
	        });
	        $('#f').fadeOut();
	    }
	    if ($(window).scrollTop() < param) {
	    	 $('#headerpic').css({
	        	width : '50%',
	        	WebkitTransition : 'width 0.3s ease-in-out',
    			MozTransition    : 'width 0.3s ease-in-out',
    			MsTransition     : 'width 0.3s ease-in-out',
    			OTransition      : 'width 0.3s ease-in-out',
    			transition       : 'width 0.3s ease-in-out'
	        });
	        $('#headerpic').attr('src', "img/ANABELSSPROUT.png");
	        $('#f').fadeIn();
	    }
	});
	// $('.label').click(function() {
	// 	var id = $(this).attr('id');
	// 	$('.'+id).toggle("slow");
	// });
	// $('.othername').mouseenter(function() {
	// 	$(this).next().find('p').css({
	// 		'background-color': '#ca564e',
	// 		'color': 'white'
	// 	});
	// });
	// $('.othername').mouseleave(function() {
	// 	$(this).next().find('p').css({
	// 		'background-color': 'white',
	// 		'color': 'black'
	// 	});
	// });
});
function fade() {
    $('.fadeInBlock').each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      var windowBottom = $(window).scrollTop() + $(window).innerHeight();

      /* If the object is completely visible in the window, fade it in */
      if (objectBottom < windowBottom) {
        if ($(this).css('opacity')==0) {$(this).fadeTo(400,1);}
      } else {
        if ($(this).css('opacity')==1) {$(this).fadeTo(400,0);}
      }
    });
  }