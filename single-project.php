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

<?php get_header('single'); ?>

<?php
		$image = get_field('project_cover');
		$fthtml = get_field('featured_html');
		if ( $image == null && $fthtml == null ) // Check if there's input
			{
			// Hide HTML via CSS
			echo '
				<style>
				.project_cover_cont {display: none;}
				</style>
				';
			} else {
			// Move Project Details ou
			echo '
				<style>
				#content #project-details {display: none;}
				</style>
				';
			}
?>
				<div class="project_cover_cont">
                	<span class="fade"></span>
		                <section id="project-details">
		                	<div class="inner-content">
		                		<h1><?php the_field('project'); ?></h1>
		                			<div id="project-client">
		                				<h2><?php the_field('client'); ?></h2>
		                			</div>
		                			<div id="project-desc">
		                				<h3><?php the_field('details'); ?></h3>
		                			</div>
                </div><!--inner-content-->

                </section><!-- project-details -->
                <div class="project_cover" style="background-image: url(' <?php echo $image['url']; ?> ')">
                        <?php the_field('featured_html'); ?>
						<img src="<?php // echo $image['url']; ?>" alt="<?php // echo $image['alt']; ?>" />
					</div><!-- project_cover -->
            	</div><!-- project_cover_cont -->
            	<div id="project_nav">
                        <ul class="page-jump">
                            <li class="prev"><?php previous_post('%', '', 'yes'); ?></li>
                            <li class="next"><?php next_post('%', '', 'yes'); ?></li>
                		</ul><!-- page jump -->
                 <?php $tag_list = get_the_tag_list( $before, $sep, $after ); ?>
                <!-- Page Pagination Navigation -->
				</div><!-- project_nav -->
				<!-- Check to see if there's input -->
                   		<?php
						$bgimage = get_field('bg_image');
						if( $bgimage == null ) {
								echo '<style> #featured-bg {display: none;} </style>';
						}
						?>
						<div id="featured-bg" style="background-image: url('<?php the_field('bg_image'); ?>');">
							<a class="bg-overlay"></a></div><!-- featured-bg -->
						<div id="content">
                <div id="inner-content" class="wrap clearfix">
                	<ul id="project-details">

                <h1><?php the_title(); ?></h1>

                <li id="project-client">

                <h2><?php the_field('client'); ?></h2>
                </li>
                <li id="project-desc">
               	<p><?php the_field('details'); ?></p>
                </li>
                </ul><!-- project-details -->
                <div id="main" class="first clearfix" role="main">
                	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                			<section class="entry-content clearfix" itemprop="articleBody">

								<div class="container-fluid projIntroParagraph">
									<div class="row">
										<div class="col-sm-8 push-sm-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac diam vitae orci mattis luctus. Suspendisse elementum metus lectus, porttitor pellentesque dui lacinia sed. Pellentesque sed mauris sed felis venenatis posuere nec vitae turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sodales, leo vel facilisis sodales, leo nisl lacinia turpis, sit amet volutpat libero nulla ac odio. Vestibulum et massa metus. </p>
										</div>
									</div>
								</div>

								<div class="container-fluid projIntro parent">

									<div class="row projIntroStat child">
										<div class="col-sm-4">
											100% something
										</div>
										<div class="col-sm-4">
											100% something
										</div>
										<div class="col-sm-4">
											100% something
										</div>
									</div>
								</div>


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

<h1 class="page-title page-header-title">Work</h1>

			</div> <!-- end #content -->

<?php the_field('javascript'); ?>

<?php get_footer(); ?>
