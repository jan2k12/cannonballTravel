<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 09.05.17
 * Time: 19:13
 */

get_header(); ?>
<?php
	while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/page/content', 'page' );


	endwhile; // End of the loop.
	?>
<?php get_footer();
