<?php  
    /* 
    Template Name: Portfolio 2 Columns 
    */  
    ?>  
	

    
	<?php get_header(); ?>


    

<div id="bg-cover_">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
				<h1 class="page-title"><?php the_title(); ?></h1>

    <?php  
        $terms = get_terms("tagportfolio");  
        $count = count($terms);  
		
        echo 	'			
					<header id="portfolio-header">
					<ul id="portfolio-filter" class="dropdown">
					<span>Category</span>
			 	';
        echo 	'
					<li><a href="#all" title="">All</a></li>
				';  
            if ( $count > 0 )  
            {     
                foreach ( $terms as $term ) {  
                    $termname = strtolower($term->name);  
                    $termname = str_replace(' ', '-', $termname);  
                    echo '<li><a href="#'.$termname.'" title="" rel="'.$termname.'">'.$term->name.'</a></li>';  
                }  
            }  
        echo 	"
					</ul><!-- portfolio-filter -->
					</header><!-- portfolio-header -->	
				";

    ?>  
        <?php   
        $loop = new WP_Query(array('posts_per_page' => 32, 'paged' => $paged, 'post_type' => 'project' ));  
        $count =0;  
			
    ?>  
                
		

    <div id="portfolio-wrapper">  
        <ul id="portfolio-list">
            <?php if ( $loop ) :   
                while ( $loop->have_posts() ) : $loop->the_post(); ?>        
                    <?php  
                    $terms = get_the_terms( $post->ID, 'tagportfolio' );  
                                          
                    if ( $terms && ! is_wp_error( $terms ) ) :   
                        $links = array();  
      
                        foreach ( $terms as $term )   
                        {  
                            $links[] = $term->name;  
                        }  
                        $links = str_replace(' ', '-', $links);   
                        $tax = join( " ", $links );       
                    else :    
                        $tax = '';    
                    endif;
                    ?>         
                    
                    <!-- -->          
                    <?php 
					$infos = get_post_custom_values('_url');
													
					?>  
                    
                                  
                    <li class="portfolio-item <?php echo( basename(get_permalink()) );?> <?php echo strtolower($tax); ?> all">
                    
                    	<div class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(1200, 560) ); ?></a></div>
                        
                        <div class="project-desc">
                        
                    	<h3><a href="<?php the_permalink() ?>"><?php echo get_field('project'); ?></a></h3>
                    	<p class="excerpt"><a href="<?php the_permalink() ?>"><?php echo get_field('client'); ?></a></p>
                        
                        </div><!-- project-desc -->
                        
                    	<p class="links"><a href="<?php echo $infos[0]; ?>" target="_blank"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php the_permalink() ?>">Details</a></p>
                    </li>
                <?php endwhile; else:	
				?>
                    <li class="error-not-found">Sorry, no entries found.</li>
            <?php endif; ?></ul>  
 
<?php wp_pagenavi( array( 'query' => $loop) ); ?>

        <div class="clearboth">  
    </div>  
    
    <script>  
        jQuery(document).ready(function() {   
            jQuery("#portfolio-list").filterable();  


			var blockItem = ("#portfolio-list li");
			var desc = ('.project-desc');
			var descH = desc.height;


// Set CSS

		$(blockItem).mouseover(
			  function(){
				$(this).find(desc).stop().animate({marginTop:'0'}, 140);	// Show Background Overlay

		});
		$(blockItem).mouseout(
			  function(){
				$(this).find(desc).stop().animate({marginTop: "50%" }, 140);	// Show Background Overlay
		});
	
	
}); // document

    </script>  
    

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

      </div><!-- bg cover -->

       
       
		</div> <!-- end #container -->
		
		<?php get_footer(); ?>
