<div class="inner-content">

<footer class="site-footer" role="contentinfo">

<nav role="navigation">

<ul class="media-bar">
<li>
<a class="facebook" href="https://www.facebook.com/tkoadvertising" title="TKO on Facebook" target="_blank"><span class="screen-reader">TKO on Facebook</span></a>
</li>
<li>
<a class="twitter" href="https://twitter.com/tkoadvertising" title="Official TKO Twitter" target="_blank"><span class="screen-reader">Official TKO Twitter</span></a>
</li>
<li>
<a class="instagram" href="http://www.instagram.com/tkoadvertising" title="TKO Instagram Feed" target="_blank"><span class="screen-reader">TKO Instagram Feed</span></a>
</li>
</ul>
<!-- Adds footer menu links -->
<?php bones_footer_links(); ?>

</nav><!-- navigation -->


<div class="slogan-bar"><span class="screen-reader">Made with Awesomeness in Austin, TX.</span></div>
<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>, All Rights Reserved</p>

</footer> <!-- end footer -->

</div><!-- inner-content -->


</div> <!-- end #container -->


<!-- all js scripts are loaded in library/bones.php -->
<?php wp_footer(); ?>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/twitterfeed.js"></script>
<script type="text/javascript">
	var userFeed0 = new Instafeed({
		target: 'instafeed',
		get: 'user',
		clientID: '182ded051bd74a528c308120405fecf0',
		userId: 361637727,
		accessToken: '361637727.467ede5.bf3ad83fdb504bbb8c77b6c107d22db6',
		sortBy: 'most-recent',
		resolution: 'low_resolution',
		limit: 8,
		template: '<div class="tile col-4"><a href="{{link}}" target="_blank" class="tile-image"><img src="{{image}}" /></a></div>'
	});
	userFeed0.run();
</script> -->

<!-- togglePanel -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/togglePanel/js/togglePanel.js"></script>
<!-- Slideshows -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/navscripts.js"></script>
</body>
</html> <!-- end html -->
