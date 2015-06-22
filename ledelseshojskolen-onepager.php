<?php
/**
 * Template Name: Ledelseshøjskolen Onepager
 */

get_header(); ?>

<!-- Markup for 'Om'-section goes in here. Other sections are fetched with get_template_part() below -->

<!--//////////////////// Introduktion \\\\\\\\\\\\\\\\\\\\-->

  <section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'intro' ); ?>>
    <div class="container">
      <article class="row row-intro">

        <img src="<?php bloginfo('template_directory'); ?>/images/icons/ic_sommerf_mbrun.svg" />
       	<?php wp_reset_query(); ?>
        <h1><?php the_title(); ?></h1>
        <h3><?php the_content(); ?></h3>

      </article>
    </div>
  </section>

	<!-- Fetch pages, ascending -->
	<?php $args = array( 'post_type' => 'page', 'order' => 'ASC' );
	  		$the_query = new WP_Query( $args ); ?>

	<!-- Show pages with different page-tamplates -->
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php if ( $post->post_name === 'om' ) { ?>
			<?php get_template_part( 'page', 'om' ); ?>
		<?php } ?>

		<?php if ( $post->post_name === 'naestehojskole' ) { ?>
			<?php get_template_part( 'page', 'naesteh' ); ?>
		<?php } ?>

		<?php if ( $post->post_name === 'faellesskabet' ) { ?>
			<?php get_template_part( 'page', 'faellessk' ); ?>
		<?php } ?>

		<?php if ( $post->post_name === 'historie' ) { ?>
			<?php get_template_part( 'page', 'historie' ); ?>
		<?php } ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>

