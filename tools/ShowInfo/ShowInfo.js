

$('.profile-header').click(function(){

    //added block of code
    {
        $(this).parent().toggleClass('selected');
        if ($(this).parent().hasClass('selected')) {
            var newHeight = $(this).height() + $(this).parent().find(".hidden-content").height();
            $(this).parent().css('height', newHeight);
        } else {
            $(this).parent().css('height','auto');
		
        }
    }
    
	$(this).parent().find(".hidden-content").toggle();
    
    //added line of code
    $(this).parent().siblings().css('height', '0').find(".hidden-content:visible").toggle();
	
	
});



