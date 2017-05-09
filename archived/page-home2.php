<?php
/*
Template Name: Layout - Home2
*/
?>

<?php get_header('home'); ?>

                   		<?php 
						$bgcover = get_field('bg_cover');

						?>

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
<ul class="grid-featured">
<li></li>
<li><div id="newest0">
    <img src="<?php echo the_field( "insta1" ); ?>">
    </div>
</li>
<li><div id="newest1">
    <img src="<?php echo the_field( "insta2" ); ?>">
</div></li>
<li><div class="post-display" id="tweet-1"></div></li>
<li><div id="newest2">
    <img src="<?php echo the_field( "insta3" ); ?>">
</div></li>
<li><div id="newest3"></div>
    <img src="<?php echo the_field( "insta4" ); ?>">
</li>
<li><div class="post-display" id="tweet-2"></div></li>
<li><div id="newest4">
    <img src="<?php echo the_field( "insta5" ); ?>">
</div></li>
<li><div class="post-display" id="tweet-3"></div></li>
</ul><!--grid-featured-->
</div><!--  inner-content -->


</div><!-- background cover / wraps all of loaded content -->



        
<!-- Adds custom page/insert -->
<?php include (TEMPLATEPATH . '/include-contact-row.php'); ?>

<?php get_footer('home'); ?>
