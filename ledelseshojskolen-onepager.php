<?php
/**
 * Template Name: Ledelseshøjskolen Onepager
 */

get_header(); ?>

	<?php
	  $args = array(
			'post_type' => 'page',
			'order' => 'ASC'
		);
		$the_query = new WP_Query( $args );
	?>
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>

