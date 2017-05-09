/*
* Copyright (C) 2009 Joel Sutherland.
* Liscenced under the MIT license

References:
		
		www.prowebdesign.ro/sortable-design-portfolio-with-wordpress-3-0-tags-and-jquery/
		http://wp.tutsplus.com/tutorials/creating-a-filterable-portfolio-with-wordpress-and-jquery/
		
		* KNOWN ISSUES:
		
		1) If not found" error is on page, just re-save permalink settings (settings>permalinks)
		
*/		


/* Filterable Code */

(function($) {	

	$.fn.filterable = function(settings) {

			var itemBlock = $('.portfolio-item .thumb');

			var itemW = itemBlock.width();
			var itemH = itemBlock.height();


		settings = $.extend({
			useHash: true,
			animationSpeed: 500,
			show: { width: 'show', opacity: 'show' },
            hide: { width: 'hide', opacity: 'hide' },
			useTags: true,
			tagSelector: '#portfolio-filter a',
			selectedTagClass: 'current',
			allTag: 'all'
		}, settings);
		
		function hideAnimation() {
				alert("hidden");
		}
		
		return $(this).each(function(){
		
			/* FILTER: select a tag and filter */
			$(this).bind("filter", function( e, tagToShow ){
				if(settings.useTags){
					$(settings.tagSelector).removeClass(settings.selectedTagClass);
					$(settings.tagSelector + '[href=' + tagToShow + ']').addClass(settings.selectedTagClass);
				}
				$(this).trigger("filterportfolio", [ tagToShow.substr(1) ]);
			});
		
			/* FILTERPORTFOLIO: pass in a class to show, all others will be hidden */
			$(this).bind("filterportfolio", function( e, classToShow ){
				if(classToShow == settings.allTag){
					$(this).trigger("show");
				}else{
					$(this).trigger("show", [ '.' + classToShow ] );
					$(this).trigger("hide", [ ':not(.' + classToShow + ')' ] );
					
					
				}
				if(settings.useHash){
					location.hash = '#' + classToShow;
				}
			});
			
			/* SHOW: show a single class*/
			$(this).bind("show", function( e, selectorToShow ){
				$(this).children(selectorToShow).delay(300).animate(settings.show, settings.animationSpeed);
			});
			
			/* SHOW: hide a single class*/
			$(this).bind("hide", function( e, selectorToHide ){

				$(this).children(selectorToHide).animate(settings.hide, settings.animationSpeed);	

			});
			
			/* ============ Check URL Hash ====================*/
			if(settings.useHash){
				if(location.hash != '')
					$(this).trigger("filter", [ location.hash ]);
				else
					$(this).trigger("filter", [ '#' + settings.allTag ]);
			}
			
			/* ============ Setup Tags ====================*/
			if(settings.useTags){
				$(settings.tagSelector).click(function(){
					$('#portfolio-list').trigger("filter", [ $(this).attr('href') ]);
					
					$(settings.tagSelector).removeClass('current');
					$(this).addClass('current');
				});
			}
		});
	}
})(jQuery);






/* -------------------------------------------------------

BEGIN JQUERY ANiMATIONS

------------------------------------------------------- */

jQuery(document).ready(function() {   
			
            jQuery("#portfolio-list").filterable(); // IMPORTANT - MAKES TARGET LIST WORK/FILTER

			var blockItem = ("#portfolio-list li");
			var desc = ('.project-desc');
			var title = ('.project-title');
			var exc = ('.excerpt');
			var descH = desc.height;
			//var client = desc.find('.excerpt');

// Set CSS

		$(blockItem).mouseover( function(){				  
				$(this).find(desc).stop().animate({'top':'0'}, 100);	// Places description to top of parent.
				$(this).find(title).stop().animate({'top':'0'}, 120);	// Places description to top of parent.
		});
		
		$(blockItem).mouseout(
			  function(){
				$(this).find(desc).stop().animate({'top': "100%" }, 100);	// Places description under parent
				$(this).find(title).stop().animate({'top':'-75px'}, 120);	
				/* Places title to the top od descriptiont since it has a + padding-top*/

		});
		
}); // document





/* make UL list a select menu 

Source: Fiddle, http://jsfiddle.net/aatZJ/4/
*/

$(document).ready(function(){
    
	
	$('.options').css( "display" , "none" );
	$('.options a').css( "display" ,"block");

    //click filters
    $('.option-button').click(function(){
        $('.options').toggle();
    }); 
    $('.options a').click(function(e){
        if($('#selItem').length == 1){
            $('#selItem').remove();
        }
       $('.option-button').after('&nbsp;&nbsp;<h6 id="selItem">'+ $(this).text() +'</h6>');
       $('.options').toggle();
        //ajax call here
    });               

    //or select event
    $('#myselect').change(function(){
        if($('#selItem').length == 1){
            $('#selItem').remove();
        }
       $('.option-button').after('<span id="selItem">'+ $(this).val() +'</span>');
       //ajax call here
    
    });
    
    
});



