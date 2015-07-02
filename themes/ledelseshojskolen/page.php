<?php
/**
 * Template Name: Standard Side
 */
?>

<?php get_header(); ?>

    <section id="<?php echo $post->post_name; ?>" <?php echo post_class(); ?>>
      <div class="container">
        <article class="row">
          <div class="col-xs-9 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-5 col-md-offset-1">

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

          </div>
          <div class="hidden-xs col-sm-4 col-sm-offset-1 col-md-4">

            <?php the_post_thumbnail(); ?>

          </div>
        </article>

        <article class="row">
          <div class="col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-4 col-md-offset-1">

            <?php $image = get_field( 'thumbnail_2' ); ?>
            <?php if( !empty($image) ) { ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php } ?>

          </div>
          <div class="col-xs-9 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1">

            <h2><?php the_field( 'title_2' ); ?></h2>
            <p><?php the_field( 'content_2' ); ?></p>

          </div>
        </article>
      </div>
    </section>

<?php get_footer(); ?>