<?php
/*
Template Name: Layout - Team
*/
?>

<?php get_header(); ?>


			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">
<h1 class="page-title page-header-title"><?php the_title(); ?></h1>



<?php
the_post();

// Get 'team' posts
$team_posts = get_posts( array(
	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
) );

if ( $team_posts ):
?>
<section class="row profiles">
	
    <ul class="people">
    
	<?php 
	foreach ( $team_posts as $post ): 
	setup_postdata($post);
	
	// Resize and CDNize thumbnails using Automattic Photon service
	$thumb_src = null;
	if ( has_post_thumbnail($post->ID) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
		$thumb_src = $src[0];
	}
	?>
    
    
	<li class="col-sm-6 profile">
    
		<a class="profile-header" id="">
			<?php if ( $thumb_src ): ?>
            <figure class="profile-pic" style="background-image:url( <?php echo $thumb_src; ?> );" title="<?php the_title(); ?>, <?php the_field('team_position'); ?>">
            <h3><?php the_title(); ?></h3>
            </figure>
			<?php endif; ?>
            
            
			<p class="lead position"><?php the_field('team_position'); ?></p>
            
		</a>
        
        
<article class="profile-content hidden-info">
        
        		<div class="profile-footer">
			<a href="tel:<?php the_field('team_phone'); ?>"><i class="icon-mobile-phone">Phone</i></a>
			<a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>"><i class="icon-envelope">E-Mail</i></a>
			<?php if ( $twitter = get_field('team_twitter') ): ?>
			<a href="http://twitter.com/<?php echo $twitter; ?>" target="_blank"><i class="icon-twitter">Twitter</i></a>
			<?php endif; ?>
			<?php if ( $linkedin = get_field('team_linkedin') ): ?>
			<a href="http://linkedin.com/<?php echo $linkedin; ?>" target="_blank"><i class="icon-linkedin">LinkedIn</i></a>
			<?php endif; ?>
		</div>
        
			<?php the_content(); ?>
</article>


	</li><!-- /.profile -->
    
 
           
	<?php endforeach; ?>
    </ul><!-- people -->
</section><!-- /.row -->
<?php endif; ?>



						</div> <!-- end #main -->



				</div> <!-- end #inner-content -->



			</div> <!-- end #content -->




<?php get_footer(); ?>
