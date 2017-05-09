<?php
/*
Template Name: Layout - Home Testing
*/
?>

<?php get_header('testing'); ?>
          <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<?php if(is_page_template('page-home-testing.php')) :?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/library/css/style-testing.css" media="screen" />
<?php endif;?> 

<div id="bg-cover">



			<div id="content">

				<div class="wrap clearfix inner-content">

						<div id="main" class="clearfix" role="main">

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); endwhile; ?>

<?php the_field('highlights'); ?>



						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

</div><!-- background cover -->

<div class="inner-content">

<ul class="grid-featured">
<li></li>
<li><div id="newest1"></div></li>
<li><div id="newest2"></div></li>
<li><div class="post-display" id="tweet-1"></div></li>
<li><div id="newest3"></div></li>
<li><div class="post-display" id="tweet-2"></div></li>
<li><div id="newest4"></div></li>
<li><div id="newest5"></div></li>
<li><div class="post-display" id="tweet-3"></div></li>
</ul>
<script type="text/javascript">
		var userFeed = new Instafeed({
			target: 'newest1',
			get: 'user',
			userId: 361637727,
			accessToken: '361637727.467ede5.e779bd6f94f0499a968d133ce3615ec1',
			sortBy: 'most-recent',
			resolution: 'low_resolution',
			limit: 5
		});
		userFeed.run();
	</script>
	<script type="text/javascript">
		var userFeed1 = new Instafeed({
			target: 'newest2',
			get: 'user',
			userId: 361637727,
			accessToken: '361637727.467ede5.e779bd6f94f0499a968d133ce3615ec1',
			sortBy: 'most-recent',
			resolution: 'low_resolution',
			limit: 5
		});
		userFeed1.run();
	</script>
	<script type="text/javascript">
		var userFeed2 = new Instafeed({
			target: 'newest3',
			get: 'user',
			userId: 361637727,
			accessToken: '361637727.467ede5.e779bd6f94f0499a968d133ce3615ec1',
			sortBy: 'most-recent',
			resolution: 'low_resolution',
			limit: 5
		});
		userFeed2.run();
	</script>
		<script type="text/javascript">
		var userFeed3 = new Instafeed({
			target: 'newest4',
			get: 'user',
			userId: 361637727,
			accessToken: '361637727.467ede5.e779bd6f94f0499a968d133ce3615ec1',
			sortBy: 'most-recent',
			resolution: 'low_resolution',
			limit: 5
		});
		userFeed3.run();
	</script>
		<script type="text/javascript">
		var userFeed4 = new Instafeed({
			target: 'newest5',
			get: 'user',
			userId: 361637727,
			accessToken: '361637727.467ede5.e779bd6f94f0499a968d133ce3615ec1',
			sortBy: 'most-recent',
			resolution: 'low_resolution',
			limit: 5
		});
		userFeed4.run();
	</script>	

</div><!--  inner-content -->

		</div> <!-- end #container -->
        
<!-- Adds custom page/insert -->
<?php include (TEMPLATEPATH . '/include-contact-row.php'); ?>

<?php get_footer(); ?>
