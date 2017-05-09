<?php
/*
Template Name: Layout - Home
*/
?>
<?php get_header('home'); ?>
<?php $bgcover = get_field('bg_cover'); ?>
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
     $args = array(
        'post_type'     => 'project',
        'post_status'   => 'publish',
        'posts_per_page' => 6,
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'tagportfolio',
                'field' => 'slug',
                'terms' => array( 'featured' )
            )
        )
        );
$query = new WP_Query( $args );

        $count =0; ?>

        <ul id="portfolio-list" class="container-fluid">
            <?php if ( $query ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
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


                    <li class="portfolio-item col-3-proj <?php echo( basename(get_permalink()) );?>" onclick="window.location='<?php the_permalink() ?>'">

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
<!--     <div class="social-row">
        <div class="tile post-display col-3-proj" id="tweet-1"></div>
        <div class="tile post-display col-3-proj" id="tweet-2"></div>
        <div class="tile post-display col-3-proj" id="tweet-3"></div>
    </div>
    <div class="social-row" id="instafeed"></div> -->
</div><!--  inner-content -->


</div><!-- background cover / wraps all of loaded content -->


<!-- Adds custom page/insert -->
<?php include (TEMPLATEPATH . '/include-contact-row.php'); ?>

<?php get_footer('footer'); ?>
