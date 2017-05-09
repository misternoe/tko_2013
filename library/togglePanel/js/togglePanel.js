

var 	menu 		= document.getElementById('main-menu');
var		menuBtn 	= document.getElementById('showMenu');
var		outside 	= document.getElementById('container');
var 	menuH		= menu.height;
var 	menuW		= menu.width;


// Menu Button Click
$(menuBtn).on('click', function(e) {
	
	// Prevent Clustering
    e.preventDefault();
    e.stopPropagation();

	// Gon' head and drop it like it's hot.
    $(menu).toggleClass('showMenu');

	// Check to see if the document's been clicked.
    $(document).one('click', function(e){
        if(	$(menu).has(e.target) /* .length === 0 */ ) {
			
			// Get rid of that original class.
            $(menu).removeClass('showMenu');
    };
		
    });
});

