<?php
/*
Template Name: Layout - Home
*/
?>
<?php get_header('home'); ?>

                   		<?php 
						$bgcover = get_field('bg_cover');

						?>
<style type="text/css">.portfolio-item {border:0.2em solid #FFF !important  ;}</style>

<div id="bg-cover" style="background-image:url('<?php the_field('bg_cover'); ?>')">



			<div id="content">

				<div class="wrap clearfix inner-content">

						<div id="main" class="clearfix" role="main">

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); endwhile; ?>

<?php the_field('highlights'); ?>



						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->


<div class="inner-content">
	<div class="grid-featured">   
	 <?php   
        $loop = new WP_Query(array('orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 3, 'paged' => $paged, 'post_type' => 'project' ));  
        $count =0;  	
    ?>  

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
                    <?php $infos = get_post_custom_values('_url'); ?>  
                    
                                  
                    <li class="portfolio-item <?php echo( basename(get_permalink()) );?>" onclick="window.location='<?php the_permalink() ?>'">
                    
                    	<div class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(1200, 560) ); ?></a></div>
                        
                        <div class="project-desc" onclick="window.location='<?php the_permalink() ?>'">
                        
                    	<h3 class="project-title"><a href="<?php the_permalink() ?>"><?php echo get_field('project'); ?></a></h3>
                        <p class="excerpt"><a href="<?php the_permalink() ?>"><?php echo get_field('client'); ?></a></p>                        
                    	</div><!-- project-desc -->
                        
                    	<p class="links"><a href="<?php echo $infos[0]; ?>" target="_blank"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php the_permalink() ?>">Details</a></p>
                    </li>
                <?php endwhile; else:	
				?>
                    <li class="error-not-found">Sorry, no entries found.</li>
            <?php endif; ?>
        </ul>

<div class="social-row">
            <div id="newest0" class="tile col-4 tile-image scoop">
                <img src="wp-content/themes/tko_2013/library/images/graphics/thescoop.png" width="100%">
            </div>
            <div id="newest1" class="tile col-4 tile-image">
                <img src="<?php echo the_field( "insta1" ); ?>">
            </div>
            <div class="tile post-display col-4" id="tweet-1"></div>
            <div id="newest2" class="tile col-4 tile-image">
                <img src="<?php echo the_field( "insta2" ); ?>">
            </div>
    </div>

<div class="social-row">
         <div class="tile">
            <div class="post-display col-4" id="tweet-2"></div>
        </div>
        <div id="newest3" class="tile col-4 tile-image">
            <img src="<?php echo the_field( "insta3" ); ?>">
        </div>
        <div id="newest4" class="tile col-4 tile-image">
            <img src="<?php echo the_field( "insta4" ); ?>">
        </div>
        <div id="newest5" class="tile col-4 tile-image">
            <img src="<?php echo the_field( "insta5" ); ?>">
        </div>
</div>

<div class="social-row">
        <div id="newest6" class="tile col-4 tile-image">
            <img src="<?php echo the_field( "insta6" ); ?>">
        </div>
        <div id="newest7" class="tile col-4 tile-image">
            <img src="<?php echo the_field( "insta7" ); ?>">
        </div>
        <div class="tile">
            <div class="post-display col-4" id="tweet-3"></div>
        </div>
        <div id="newest8" class="tile col-4 tile-image">
            <img src="<?php echo the_field( "insta8" ); ?>">
        </div>
</div>


</div><!--  inner-content -->


</div><!-- background cover / wraps all of loaded content -->



        
<!-- Adds custom page/insert -->
<?php include (TEMPLATEPATH . '/include-contact-row.php'); ?>

<?php get_footer('home'); ?>
