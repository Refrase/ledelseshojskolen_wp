<?php
/**
 * Template Name: Næste Højskole
 */
?>

<!--//////////////////// Næste Højskole & Tilmelding \\\\\\\\\\\\\\\\\\\\-->

  	<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'nhojsktilm' ); ?>>
    	<div class="whitebox-nhojsktilm"></div>
      <div class="container">
        <article class="row row-nhojsktilm row-nhojsktilm_intro">
          <div class="col-xs-10 col-sm-5">
            <div class="col-xs-offset-1 col-sm-10">
	            <h2><?php the_title(); ?></h2>
	            <p><?php the_content(); ?></p>

	            <h3><?php the_field( 'tema' ); ?></h3>
	            <h4><?php the_field( 'dato' ); ?></h4>
	            <ul>
	              <li><b><?php the_field( 'sted' ); ?></b></li>
	              <li><?php the_field( 'vej' ); ?></li>
	              <li><?php the_field( 'by' ); ?></li>
	              <li><?php the_field( 'område' ); ?></li>
	            </ul>
	            <p><?php the_field( 'pris' ); ?></p>
            </div>

						<!-- Load kun program, hvis der faktisk er et at linke til -->
            <div class="col-xs-6 col-xs-offset-1 col-sm-5">
            	<?php if( get_field('program') ) { ?>
              	<a href="<?php the_field( 'program' ); ?>" class="btn btn-default btn-program">Program</a>
              <?php } ?>
            </div>

            <div class="col-xs-7 col-xs-offset-1 col-sm-12">
	            <?php $image = get_field( 'logo' ); ?>
	            <?php if( !empty($image) ) { ?>
	              <img class="logo-nhojsktilm" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	            <?php } ?>
            </div>
          </div>

        </article>
      </div>

      <div class="container">
			 <?php get_sidebar( 'tilmelding' ); ?>
      </div>

    </section>