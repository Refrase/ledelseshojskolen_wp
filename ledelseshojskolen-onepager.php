<?php
/**
 * Template Name: Ledelseshøjskolen Onepager
 */

get_header(); ?>

<!-- Markup for 'Om'-section goes in here. Other sections are fetched with get_template_part() below -->

<!--//////////////////// Introduktion \\\\\\\\\\\\\\\\\\\\-->

  <section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'intro' ); ?>>
  <?php wp_reset_postdata(); ?>
    <div class="container">
      <article class="row row-intro">

        <?php the_post_thumbnail(); ?>
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

	<?php endwhile; endif; wp_reset_postdata(); ?>

  <footer id="footer">
    <div class="container-fluid">
      <form class="form form-newsletter form-horizontal col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
        <div class="form-group">
          <h2>Nyhedsbrev</h2>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="newslMail" placeholder="Mail" />
            <p class="help-block"><?php the_field( 'tekst_under_nyhedsbrev' ); ?></p>
          </div>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-default btn-tilmeld btn-newsl">Tilmeld</button>
          </div>
        </div>
      </form>

      <ul class="footer-btm">

        <ul class="footer-btm-left">
          <li><?php the_field( 'vej' ); ?></li>
          <li><?php the_field( 'by' ); ?></li>
          <a href="mailto:dennis.rasmussen@playingfield.dk">
            <li><?php the_field( 'mail' ); ?></li>
          </a>
          <li><?php the_field( 'telefon' ); ?></li>
        </ul>

        <ul class="footer-btm-center">
          <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/ic_sommerf_mgron.svg" /></li>
          <h3>&copy; <?php echo date( 'Y' ); ?> Ledelseshøjskolen</h3>
        </ul>

        <ul class="footer-btm-right">
          <!-- LinkedIn -->
          <a href="http://www.linkedin.com/shareArticle?url=http%3A//ledelseshojskolen.dk">
            <li><i class="fa fa-linkedin fa-2x btn-share"></i></li>
          </a>
          <!-- Twitter -->
          <a href="http://twitter.com/share?url=http%3A//ledelseshojskolen.dk&text=Playingfields+Ledelsesh&#248;jskole">
            <li><i class="fa fa-twitter fa-2x btn-share"></i></li>
          </a>
          <!-- Facebook -->
          <a href="http://www.facebook.com/sharer.php?u=http%3A//ledelseshojskolen.dk&t=Playingfields+Ledelsesh&#248;jskole">
            <li><i class="fa fa-facebook fa-2x btn-share"></i></li>
          </a>
        </ul>

      </ul>
    </div>
  </footer>

<?php get_footer(); ?>

