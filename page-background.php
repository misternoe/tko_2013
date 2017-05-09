<?php
/*
Template Name: Layout - Background Default
*/
?>

<?php get_header(); ?>


<div id="bg-cover">



			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">
<h1 class="page-title"><?php the_title(); ?></h1>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); endwhile; ?>

<?php the_field('highlights'); ?>



						</div> <!-- end #main -->



				</div> <!-- end #inner-content -->



			</div> <!-- end #content -->

</div><!-- background cover -->

		</div> <!-- end #container -->

<?php get_footer(); ?>
