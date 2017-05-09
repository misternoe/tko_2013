<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

<?php 
		$image = get_field('project_cover');
		$fthtml = get_field('featured_html');
		if ( $image == null && $fthtml == null ) // Check if there's input
			{
			echo '<style> .project_cover_cont {display: none;} </style>'; // Hide HTML via CSS
			}
?>
                        
				<div class="project_cover_cont">
                

                
                
                   <div class="project_cover" style="background-image: url(' <?php echo $image['url']; ?> ')">
                        <?php the_field('featured_html'); ?>                                                
						<img src="<?php // echo $image['url']; ?>" alt="<?php // echo $image['alt']; ?>" />                        
					</div><!-- project_cover -->
            	</div><!-- project_cover_cont -->




                
                

                        <!-- Check to see if there's input -->
                   		<?php  
						$bgimage = get_field('bg_image');
						if( $bgimage == null ) {
								echo '<style> #featured-bg {display: none;} </style>';
						}
						?>
                        
<div id="featured-bg" style="background-image: url('<?php the_field('bg_image'); ?>');">
<a class="bg-overlay"></a></div><!-- featured-bg -->


                <div id="project_name">                
                <div class="inner-content">                
                        <ul class="page-jump">
						<li class="prev"><?php previous_post('%', '', 'yes'); ?></li>
						<li class="next"><?php next_post('%', '', 'yes'); ?></li>
                </ul><!-- page jump -->
                
                 <?php $tag_list = get_the_tag_list( $before, $sep, $after ); ?> 
                				<!-- Page Pagination Navigation -->
                        <header class="article-header">
                            <h1 itemprop="headline"><?php the_title(); ?></h1>	
                        </header> <!-- end article header -->               
                </div><!-- inner-content -->                
				</div><!-- project_name -->
                
                

			<div id="content">
                <div id="inner-content" class="wrap clearfix">
             
                <div id="main" class="first clearfix" role="main">
                
                <ul id="project-details">
                
                <li id="project-client">
                <h4>Client</h4>
                	<h3><?php the_field('client'); ?></h3>
                </li>                        
                <li id="project-desc">
                <h4>Details</h4>
               	<p><?php the_field('details'); ?></p>
                </li>
                <li id="project-share">
                <h4>Share</h4>
                
<a href="https://twitter.com/share" class="twitter-share-button" data-related="tkoadvertising" data-count="none" data-hashtags="tkoadvertising">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<a name='fb_share' style="float:left; margin:0;" type='button_count' href='http://www.facebook.com/sharer.php?appId={YOUR APP ID}&link=<?php the_permalink() ?>' rel='nofollow'>Share</a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
                </li>
                </ul><!-- project-details -->
    
                
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->
							
						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->

					<?php /*get_sidebar();*/ ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->
            
<?php the_field('javascript'); ?>

<?php get_footer(); ?>
