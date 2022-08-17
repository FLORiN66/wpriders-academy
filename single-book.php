<?php
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		$image = get_field( 'author_image' );

		echo '<h1>' . get_the_title() . '</h1>';
		the_content();

		the_field( 'authors' );

		echo '<img class="wpr_image" src="' . $image['url'] . '" alt="' . $image['title'] . '">';
	}
}


get_footer();



