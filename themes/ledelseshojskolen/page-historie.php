<?php
/**
 * Template Name: Historie
 */
?>

<!--//////////////////// Tidligere Højskoler \\\\\\\\\\\\\\\\\\\\-->

    <section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'tidlhoj' ); ?>>
      <div class="container">

        <div class="tidlhoj-nav">
          <h1><?php the_title(); ?></h1>
        </div>

      </div>
    </section>

    <section class="tidlhoj-beskr" id="tidlhoj-beskr">
      <div class="container-fluid">
        <article class="row row-tidlhoj-beskr">

          <div class="tidlhoj-timeline-wrap">
            <svg height="80" width="100%">
              <line class="tl-streg" x1="0" y1="50%" x2="50%" y2="50%"></line>
              <line class="tl-streg" x1="50%" y1="50%" x2="70%" y2="50%" stroke-dasharray="8,8"></line>
              <g stroke-width="4">
	              <circle class="tl-punkt" id="tl-p1" cx="30%" cy="50%" r="10"></circle>
	              <circle class="tl-punkt" id="tl-p2" cx="50%" cy="50%" r="10"></circle>
	              <circle class="tl-punkt" id="tl-p3" cx="70%" cy="50%" r="10"></circle>
              </g>
            </svg>
          </div>

          <?php
          	$args = [
          		'post_type' => 'hojskole'
          	];
          	$query = new WP_Query( $args );
          	$counter = 1;
          ?>
					<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	          <div class="tl-cont <?php echo 'tl-p' . $counter .'-cont'; ?>">
	            <div class="col-xs-9 col-sm-4 col-md-3">
	              <div class="col-md-12">
	                <h2><?php the_title(); ?></h2>
	                <h3><?php the_field( 'sted' ); ?></br><?php the_field( 'omrade' ); ?></h3>
	                <h5><?php the_field( 'dato' ); ?></h5>
	              </div>
	              <!-- Load kun dokushop, hvis der faktisk er et at linke til -->
	              <div class="col-sm-6">
		            	<?php if( get_field('dokushop') ) { ?>
		              	<a href="<?php the_field( 'dokushop' ); ?>" class="btn btn-dokushop">Dokushop</a>
		              <?php } ?>
	              </div>
	            </div>

	            <p class="col-xs-8 col-sm-5 col-md-3 tidlhojsk-beskr_bodyc">
								<?php the_field( 'beskrivelse' ); ?><br><br>
								<div class="col-xs-12">
	              <blockquote class="col-xs-7 col-sm-6 col-md-4 col-sm-offset-2">
	                <p><?php the_field( 'udtalelse' ); ?></p>
	                <cite class="tidlhojsk-beskr_citat-kilde"><?php the_field( 'kilde' ); ?></cite>
	              </blockquote>
	              </div>
	            </p>

							<div class="tidlhoj-pic_overlay"></div>

	          	<?php $image = get_field( 'billede' ); ?>
	            <?php if( !empty($image) ) { ?>
	              <img class="tidlhoj-pic" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	            <?php } ?>
	          </div>

					<?php $counter++;
					endwhile; endif; wp_reset_postdata(); ?>

        </article>
      </div>

      <div class="tidlhoj-beskr-bg"></div>

    </section>