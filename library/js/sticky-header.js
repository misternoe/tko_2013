$(window).scroll(function() {
	
	var headerHeight = $('.header').height();
	
    header = $(document).scrollTop();
 
     if (header > headerHeight ) { // Change this number to the amount you want to scroll before the header sticks
          $('.header').addClass('sticky');
     } else {
          $('.header').removeClass('sticky');
     }
});
