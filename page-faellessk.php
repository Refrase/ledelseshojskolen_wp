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
            <h4 class="col-sm-12"><?php the_field( 'grp1_titel' ); ?></h4>
            <ul class="faelskab_billeder lh-gruppen col-md-offset-3 col-md-6">

							<?php // Create array: $fields = [ 'lh_grp_medl1', 'lh_grp_medl2', ... ];
								// Er lige nu sat til at der kan tilføjes op til 20 medlemmer i WP
								$fields_lh = [];
								for ( $i = 1; $i < 20; $i++ ) {
									$field = 'lh_grp_medl' . $i;
									array_push($fields_lh, $field);
								}

								// Create array: $members, with member objects to get ['url'] + ['alt']
								$members_lh = [];
								for ( $i = 0; $i <= 20; $i++ ) {
									// ACF-function to get field (member) object
									$member = get_field( $fields_lh[$i] );
									if ( $member ) {
										array_push($members_lh, $member); ?>
										<li>
											<img src="<?php echo $members_lh[$i]['url']; ?>" alt="<?php echo $members_lh[$i]['alt']; ?>" />
										</li> <?php
								  }
								} ?>

            </ul>
					</div>

					<div class="row">
            <h4 class="col-sm-12"><?php the_field( 'grp2_titel' ); ?></h4>
            <ul class="faelskab_billeder adv-board col-md-offset-3 col-md-6">

							<?php // Create array: $fields = [ 'lh_grp_medl1', 'lh_grp_medl2', ... ];
								// Er lige nu sat til at der kan tilføjes op til 20 medlemmer i WP
								$fields_ab = [];
								for ( $i = 1; $i < 20; $i++ ) {
									$field = 'adv_brd_medl' . $i;
									array_push($fields_ab, $field);
								}

								// Create array: $members, with member objects to get ['url'] + ['alt']
								$members_ab = [];
								for ( $i = 0; $i <= 20; $i++ ) {
									// ACF-function to get field (member) object
									$member = get_field( $fields_ab[$i] );
									if ( $member ) {
										array_push($members_ab, $member); ?>
										<li>
											<img src="<?php echo $members_ab[$i]['url']; ?>" alt="<?php echo $members_ab[$i]['alt']; ?>" />
										</li> <?php
								  }
								} ?>

            </ul>
          </div>

          <div class="row">
            <div class="col-sm-offset-5 col-sm-2">
              <button class="btn btn-default btn-medlemmer"><?php the_field( 'medlemmer' ); ?></button>
            </div>
          </div>

      </div>
    </section>