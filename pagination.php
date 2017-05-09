<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.



*/


function custom_nextpage_links($defaults) {
$args = array(
'before' => '<div class="my-paginated-posts"><p>' . __('Sections &#151;'),
'after' => '</p></div>',
);
$r = wp_parse_args($args, $defaults);
return $r;
}
add_filter('wp_link_pages_args','custom_nextpage_links');

?>

