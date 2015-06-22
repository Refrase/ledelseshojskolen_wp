<?php
/**
 * Template Name: Fællesskabet
 */
?>

<!--//////////////////// Fællesskabet \\\\\\\\\\\\\\\\\\\\-->

    <section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'faelskab' ); ?>
      <div class="container">

          <h2><?php the_title(); ?></h2>

          <div class="row">
            <h4 class="col-md-offset-1 col-md-2">LH Gruppen</h4>
            <ul class="faelskab_billeder lh-gruppen col-md-7">
              <li><img src="<?php bloginfo('template_directory'); ?>/images/dennis_rasmussen-128x192.jpg" alt="Dennis Rasmussen"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/claus_dahl-128x192.jpg" alt="Claus Dahl"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/ole_dissing-128x192.jpg" alt="Ole Dissing"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/jens_larsen-128x192.jpg" alt="Jens Larsen"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/carsten_reves-128x192.jpg" alt="Carsten Reves"></li>
            </ul>

            <h4 class="col-md-offset-1 col-md-2">Advisory Board</h4>
            <ul class="faelskab_billeder adv-board col-md-7">
              <li><img src="<?php bloginfo('template_directory'); ?>/images/ole_pedersen-128x192.jpg" alt="Ole Pedersen"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/lisbet_lentz-128x192.jpg" alt="Lisbet Lentz"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/lars_holten-128x192.jpg" alt="Lars Holten"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/dennis_rasmussen-128x192.jpg" alt="Kommer..."></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/images/dennis_rasmussen-128x192.jpg" alt="Kommer..."></li>
            </ul>
          </div>

          <div class="row">
            <div class="col-sm-offset-5 col-sm-2">
              <button class="btn btn-default btn-medlemmer">Medlemmer</button>
            </div>
          </div>

      </div>
    </section>