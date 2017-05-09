<?php  
    /* 
    Template Name: Portfolio 2 Columns old
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
        echo '<ul id="portfolio-filter">';  
        echo '<li><a href="#all" title="">All</a></li>';  
            if ( $count > 0 )  
            {     
                foreach ( $terms as $term ) {  
                    $termname = strtolower($term->name);  
                    $termname = str_replace(' ', '-', $termname);  
                    echo '<li><a href="#'.$termname.'" title="" rel="'.$termname.'">'.$term->name.'</a></li>';  
                }  
            }  
        echo "</ul>";  
    ?>  
        <?php   
        $loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => 10));  
        $count =0;  
    ?>  
                

                <?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $the_query->max_num_pages
) );
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
                           
                                       
                                        
                                               
                    <?php $infos = get_post_custom_values('_url'); ?>  
                                  
                    <li class="portfolio-item <?php echo strtolower($tax); ?> all">  
                        <div class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(1200, 560) ); ?></a></div>  
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>  
                        <p class="excerpt"><a href="<?php the_permalink() ?>"><?php echo get_the_excerpt(); ?></a></p>  
                        <p class="links"><a href="<?php echo $infos[0]; ?>" target="_blank"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php the_permalink() ?>">Details</a></p>  
                    </li>  
                       
                       

                <?php pagination('»', '«'); ?>
             
                <?php endwhile; else: ?>  
                           
                    <li class="error-not-found">Sorry, no entries found.</li>  
                              
                              

            <?php endif; ?>  
           
     
        </ul>  
 
   <?php bones_page_navi('','',$testimonials); ?>


        <div class="clearboth">  
    </div>  
    
    <script>  
        jQuery(document).ready(function() {   
            jQuery("#portfolio-list").filterable();  
        });  
    </script>  
    

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

      </div><!-- bg cover -->

       
       
		</div> <!-- end #container -->
		
		<?php get_footer(); ?>
