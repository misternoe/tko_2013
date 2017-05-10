<?php
    /*
    Template Name: Portfolio 2 Columns
    */
    ?>



<?php get_header(); ?>


			<div id="content">


				<h1 class="page-title page-header-title"><?php the_title(); ?></h1>


    <?php



        $terms = get_terms("tagportfolio");
        $count = count($terms);

        echo 	'
					<header id="portfolio-header">

					<div class="inner-content">
					<h4>Category</h4>
					<a class="option-button">&#9776;</a>
					<ul id="portfolio-filter" class="options dropdown">
			 	';
        echo 	'
					<li><a href="#all" title="">All</a></li>
				';
            if ( $count > 0 )
            {
                foreach ( $terms as $term ) {
                    $termname = strtolower($term->name);
                    $termname = str_replace(' ', '-', $termname);
                    echo '<li><a href="#'.$termname.'" title="" rel="'.$termname.'">'.$term->name.'</a></li>';
                }
            }
        echo 	"
					</ul><!-- portfolio-filter -->
					</div><!-- /inner-content -->
					</header><!-- portfolio-header -->
				";

    ?>




        <?php
        $loop = new WP_Query(array('orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 38, 'paged' => $paged, 'post_type' => 'project' ));
        $count =0;

    ?>



    <div id="portfolio-wrapper">

        <ul id="portfolio-list">
            <?php if ( $loop ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php
                    $terms = get_the_terms( $post->ID, 'tagportfolio' );

                    if ( $terms && ! is_wp_error( $terms ) ) :
                        $links = array();

                        foreach ( $terms as $term )
                        {
                            $links[] = $term->name;
                        }
                        $links = str_replace(' ', '-', $links);
                        $tax = join( " ", $links );
                    else :
                        $tax = '';
                    endif;
                    ?>

                    <!-- -->
                    <?php
					$infos = get_post_custom_values('_url');

					?>


                    <li class="portfolio-item col-sm-4 <?php echo( basename(get_permalink()) );?> <?php echo strtolower($tax); ?> all" onclick="window.location='<?php the_permalink() ?>'">
                        	<div class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(1200, 560) ); ?></a></div>

                            <div class="project-desc" onclick="window.location='<?php the_permalink() ?>'">

                        	       <h3 class="project-title"><a href="<?php the_permalink() ?>"><?php echo get_field('project'); ?></a></h3>
                                <p class="excerpt"><a href="<?php the_permalink() ?>"><?php echo get_field('client'); ?></a></p>
                        	</div><!-- project-desc -->

                        	<p class="links"><a href="<?php echo $infos[0]; ?>" target="_blank"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php the_permalink() ?>">Details</a></p>
                    </li>
                <?php endwhile; else:
				?>
                    <li class="error-not-found">Sorry, no entries found.</li>
            <?php endif; ?></ul>

<?php wp_pagenavi( array( 'query' => $loop) ); ?>

				<div class="clearboth"></div><!--clear-->

			</div> <!-- end #content -->




		</div> <!-- end #container -->

		<?php get_footer(); ?>
