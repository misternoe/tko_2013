// The speed of one transition (fadeIn or fadeOut).
// Full execution time will be:
// (browser navigation time) + speed * 2;
// You can set this to slow, medium, fast, or number of ms.




// Speed of Animation
var speed = 300;


// Hide Everythang.
$('html, body').hide();

// Load Preloader Cover
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(400).fadeOut(400);
});


/* Fades in Requested URL Path */
$(document).ready(function() {
	
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
			// Check to make sure LINK isn't targeted to an #ID.
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
				//headerLogo.animate({ marginTop: + headerHeight }, 400 );
                window.location = url;
            });
        });
    });
});




/*





$(document).ready(function() {

var header = $('.header');
var headerLogo = $(".header #logo");
var headerHeight = $(".header").height();

headerLogo.css("marginTop", + headerHeight );
header.css("overflow", "hidden" );



	$("body").css("display", "none");
	$("body").fadeIn(200);
	
	
	headerLogo.animate({ marginTop: 0, opacity: 1 }, 500, 
	
		function() {
			// onComplete
			header.css("overflow", "visible" );		}
	);


});

*/
