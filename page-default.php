<?php
/*
Template Name: Layout - Default
*/
?>

<?php get_header(); ?>




			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">
                        
 <h1 class="page-title page-header-title"><?php the_title(); ?></h1>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); endwhile; ?>

<?php the_field('highlights'); ?>



						</div> <!-- end #main -->



				</div> <!-- end #inner-content -->



			</div> <!-- end #content -->




<?php get_footer(); ?>
