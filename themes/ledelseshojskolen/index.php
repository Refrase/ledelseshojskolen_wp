<?php get_header(); ?>

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

<?php get_footer(); ?>
