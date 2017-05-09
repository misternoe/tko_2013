<?php

/* -----------------------------------------------------------------------------------------
	
	Add Portfolio Section

----------------------------------------------------------------------------------------- */
	// Function
	

	
	function enqueue_filterable()   
	{  
		wp_register_script( 'filterable', get_template_directory_uri() . '/library/filterable/js/filterable.js', array( 'jquery' ) );  
		wp_enqueue_script( 'filterable' );  
		wp_register_style( 'custom-style', get_template_directory_uri() . '/library/filterable/css/portfolio.css', array(), '20120208', 'all' );
		wp_enqueue_style( 'custom-style' );
	}  
	add_action('wp_enqueue_scripts', 'enqueue_filterable'); 
	
	
     // Add Project Panel
	add_action('init', 'project_custom_init'); 
	
	
    /* SECTION - project_custom_init */  
    function project_custom_init()  
    {  
    // The following is all the names, in our tutorial, we use "Project"  
    $labels = array(  
        'name' => _x('Projects', 'post type general name'),  
        'singular_name' => _x('Project', 'post type singular name'),  
        'add_new' => _x('Add New', 'project'),  
        'add_new_item' => __('Add New Project'),  
        'edit_item' => __('Edit Project'),  
        'new_item' => __('New Project'),  
        'view_item' => __('View Project'),  
        'search_items' => __('Search Projects'),  
        'not_found' =>  __('No projects found'),  
        'not_found_in_trash' => __('No projects found in Trash'),  
        'parent_item_colon' => '',  
        'menu_name' => 'Portfolio'  
    );  
        
    // Some arguments and in the last line 'supports', we say to WordPress what features are supported on the Project post type  
    $args = array(  
        'labels' => $labels,  
        'public' => true,  
        'publicly_queryable' => true,  
        'show_ui' => true,  
        'show_in_menu' => true,  
        'query_var' => true,  
        'rewrite' => true,  
        'capability_type' => 'post',  
        'has_archive' => true,  
        'hierarchical' => true,  
        'menu_position' => null,  
        'supports' => array('title','editor','author','thumbnail','excerpt','comments')  
    );  
        
    // We call this function to register the custom post type  
    register_post_type('project',$args);  
	
	
	    // Initialize Taxonomy Labels  
    $labels = array(  
        'name' => _x( 'Tags', 'taxonomy general name' ),  
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),  
        'search_items' =>  __( 'Search Types' ),  
        'all_items' => __( 'All Tags' ),  
        'parent_item' => __( 'Parent Tag' ),  
        'parent_item_colon' => __( 'Parent Tag:' ),  
        'edit_item' => __( 'Edit Tags' ),  
        'update_item' => __( 'Update Tag' ),  
        'add_new_item' => __( 'Add New Tag' ),  
        'new_item_name' => __( 'New Tag Name' ),  
    );  
          
    // Register Custom Taxonomy  
    register_taxonomy('tagportfolio',array('project'), array(  
        'hierarchical' => false, // define whether to use a system like tags(false) or categories(true)
        'labels' => $labels,  
        'show_ui' => true,  
        'query_var' => true,  
        'rewrite' => array( 'slug' => 'tag-portfolio' ),  
    ));  
	}  
    /* #end SECTION - project_custom_init --*/  
	
	
    /*--- Custom Messages - project_updated_messages ---*/  
    add_filter('post_updated_messages', 'project_updated_messages');  
      
    function project_updated_messages( $messages ) {  
      global $post, $post_ID;  
      
      $messages['project'] = array(  
        0 => '', // Unused. Messages start at index 1.  
        1 => sprintf( __('Project updated. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),  
        2 => __('Custom field updated.'),  
        3 => __('Custom field deleted.'),  
        4 => __('Project updated.'),  
        /* translators: %s: date and time of the revision */  
        5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,  
        6 => sprintf( __('Project published. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),  
        7 => __('Project saved.'),  
        8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),  
        9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>'),  
          // translators: Publish box date format, see http://php.net/date  
          date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),  
        10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),  
      );  
      
      return $messages;  
	 /*--- Demo URL meta box ---*/  
  
add_action('admin_init','portfolio_meta_init');  
  
function portfolio_meta_init()  
{  
    // add a meta box for WordPress 'project' type  
    add_meta_box('portfolio_meta', 'Project Infos', 'portfolio_meta_setup', 'project', 'side', 'low');  
   
    // add a callback function to save any data a user enters in  
    add_action('save_post','portfolio_meta_save');  
}  
  
function portfolio_meta_setup()  
{  
    global $post;  
       
    ?> 
    
     
        <div class="portfolio_meta_control">  
            <label>URL</label>  
            <p>  
                <input type="text" name="_url" value="<?php echo get_post_meta($post->ID,'_url',TRUE); ?>" style="width: 100%;" />  
            </p>  
        </div>  
        
        
        
    <?php  
  
    // create for validation  
    echo '<input type="hidden" name="meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';  
}  
  
function portfolio_meta_save($post_id)   
{  
    // check nonce  
    if (!isset($_POST['meta_noncename']) || !wp_verify_nonce($_POST['meta_noncename'], __FILE__)) {  
    return $post_id;  
    }  
  
    // check capabilities  
    if ('post' == $_POST['post_type']) {  
    if (!current_user_can('edit_post', $post_id)) {  
    return $post_id;  
    }  
    } elseif (!current_user_can('edit_page', $post_id)) {  
    return $post_id;  
    }  
  
    // exit on autosave  
    if (defined('DOING_AUTOSAVE') == DOING_AUTOSAVE) {  
    return $post_id;  
    }  
  
    if(isset($_POST['_url']))   
    {  
        update_post_meta($post_id, '_url', $_POST['_url']);  
    } else   
    {  
        delete_post_meta($post_id, '_url');  
    }  


} // Don't remove this bracket  
/*--- #end  Demo URL meta box ---*/ 
}// Don't remove this bracket  
/*--- END PORTFOLIO - project_updated_messages ---*/  


?>