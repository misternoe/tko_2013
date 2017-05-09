<?php
/*
Template Name: Timber
*/
?>
<?php $bgcover = get_field('bg_cover'); ?>
<style type="text/css">.portfolio-item {border:0.2em solid #FFF !important  ;}</style>

<div id="bg-cover" style="background-image:url('<?php the_field('bg_cover'); ?>')">

			<div id="content">

				<div class="wrap clearfix inner-content">

						<div id="main" class="clearfix" role="main">

<?php $context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( 'derp.twig', $context );?>


						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->


</div><!-- background cover / wraps all of loaded content -->


<!-- Adds custom page/insert -->
<?php get_footer('home'); ?>
