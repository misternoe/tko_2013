<?php get_header(); ?>



			<div id="content">



				<div id="inner-content" class="wrap clearfix">



					<div id="main" class="eightcol first clearfix" role="main">



								<h1 class="page-title"><?php _e("Got Knocked Out of the Ring?", "bonestheme"); ?></h1>





								<h3><?php _e("We hope you're ready to go back in.", "bonestheme"); ?></h3>

                                <br />

                                <p>

                                <a class="button" href="<?php echo home_url(); ?>" title="<?php echo home_url(); ?>">Let's go.</a>

                                </p>



							</section> <!-- end article section -->



							<section class="search">



									<p><?php // get_search_form(); ?></p>



							</section> <!-- end search section -->



							<footer class="article-footer">





							</footer> <!-- end article footer -->



						</article> <!-- end article -->



					</div> <!-- end #main -->



				</div> <!-- end #inner-content -->



			</div> <!-- end #content -->



<!-- Adds custom page/insert -->

<?php include (TEMPLATEPATH . '/include-contact-row.php'); ?>



<?php get_footer(); ?>

