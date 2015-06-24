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
          <div class="col-sm-5">
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-10">
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
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-4">
            	<?php if( get_field('program') ) { ?>
              	<a href="<?php the_field( 'program' ); ?>" class="btn btn-default btn-program">Program</a>
              <?php } ?>
            </div>

            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-12">
	            <?php $image = get_field( 'logo' ); ?>
	            <?php if( !empty($image) ) { ?>
	              <img class="logo-nhojsktilm" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	            <?php } ?>
            </div>
          </div>

        </article>
      </div>

      <article class="nhojsktilm_tilm col-sm-6 col-sm-offset-6 col-md-6">
        <form class="form-nhojsktilm form-horizontal">
          <div class="form-group col-xs-10 col-sm-12">
            <div class="col-xs-offset-1 col-sm-10 col-sm-offset-2 col-md-7 col-md-offset-4">
              <h3>Tilmelding</h3>
              <p class="help-block">Tilmeldingen er bindende fra en måned før afholdelse. Din tilmelding bekræftes automatisk pr. mail.
              Invitation og endeligt program fremsendes ca. 3 uger før afholdelse på mail.</p>
            </div>
          </div>
          <div class="form-group col-xs-10 col-sm-12">
            <label for="tilmForn" class="control-label col-xs-offset-1 col-sm-offset-1 col-sm-4 col-lg-3">Fornavn*</label>
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-7">
              <input required type="text" class="form-control" id="tilmForn">
            </div>
          </div>
          <div class="form-group col-xs-10 col-sm-12">
            <label for="tilmEftern" class="control-label col-xs-offset-1 col-sm-offset-1 col-sm-4 col-lg-3">Efternavn*</label>
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-7">
              <input required type="text" class="form-control" id="tilmEftern">
            </div>
          </div>
          <div class="form-group col-xs-10 col-sm-12">
            <label for="tilmMail" class="control-label col-xs-offset-1 col-sm-offset-1 col-sm-4 col-lg-3">Mail*</label>
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-7">
              <input required type="email" class="form-control" id="tilmMail">
            </div>
          </div>
          <div class="form-group col-xs-10 col-sm-12">
            <label for="tilmOrg" class="control-label col-xs-offset-1 col-sm-offset-1 col-sm-4 col-lg-3">Organisation</label>
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-7">
              <input type="text" class="form-control" id="tilmOrg">
            </div>
          </div>
          <div class="form-group col-xs-10 col-sm-12">
            <label for="tilmBesk" class="control-label col-xs-offset-1 col-sm-offset-1 col-sm-4 col-lg-3">Besked</label>
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-7">
              <textarea class="form-control" id="tilmBesk"></textarea>
            </div>
          </div>
          <div class="form-group form-nhojsktilm_checkbmedlemsk col-xs-10 col-sm-12">
            <div class="col-xs-offset-1 col-sm-10 col-sm-offset-2 col-md-offset-4 col-md-7">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Medlemskab
                </label>
                <p class="help-block">
                  10% rabat på ledelseshøjskoler, nyhedsbrev, invitationer til særarrangementer, mulighed for at holde oplæg på ledelseshøjskolen og inspirerende netværk.
                  Medlemskabet er gratis.
                </p>
              </div>
            </div>
          </div>
					<div class="form-group col-xs-10 col-sm-12">
            <div class="col-xs-offset-1 col-sm-10 col-sm-offset-2 col-md-offset-4 col-md-7">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Nyhedsbrev
                </label>
                <p class="help-block">
                  Udsendes 2-4 gange om året.
                </p>
              </div>
            </div>
          </div>
          <div class="form-group col-xs-10 col-sm-12">
            <div class="col-xs-offset-1 col-xs-6 col-xs-offset-0 col-sm-4 col-sm-offset-2 col-md-offset-4">
              <button type="submit" class="btn btn-default btn-tilmeld">Tilmeld</button>
            </div>
          </div>
        </form>
      </article>
    </section>