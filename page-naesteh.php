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
            <div class="col-sm-10">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

            <h3>Den Skabende Kraft i Ledelse</h3>
            <h4>16. - 18. november 2015</h4>
            <ul>
              <li><b>Den Frie Lærerskole</b></li>
              <li>Svendborgvej 15</li>
              <li>5762 Vester Skerninge</li>
              <li>Ollerup, Svendborg</li>
            </ul>
            <p>9.995,- eks. moms</p>
            </div>

            <div class="col-sm-4">
              <button class="btn btn-default btn-program">Program</button>
            </div>

            <div class="col-sm-12">
              <img class="logo-nhojsktilm" src="<?php bloginfo('template_directory'); ?>/images/logo_dfl_sort.png" />
            </div>
          </div>

        </article>
      </div>

      <article class="nhojsktilm_tilm col-sm-offset-6 col-sm-6">
        <form class="form-nhojsktilm form-horizontal">
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-7">
              <h3>Tilmelding</h3>
              <p class="help-block">Tilmeldingen er bindende fra en måned før afholdelse. Din tilmelding bekræftes automatisk pr. mail.
              <br>
              Invitation og endeligt program fremsendes ca. 3 uger<br> før afholdelse.</p>
            </div>
          </div>
          <div class="form-group">
            <label for="tilmForn" class="control-label col-sm-offset-1 col-sm-2">Fornavn*</label>
            <div class="col-sm-7">
              <input required type="text" class="form-control" id="tilmForn">
            </div>
          </div>
          <div class="form-group">
            <label for="tilmEftern" class="control-label col-sm-offset-1 col-sm-2">Efternavn*</label>
            <div class="col-sm-7">
              <input required type="text" class="form-control" id="tilmEftern">
            </div>
          </div>
          <div class="form-group">
            <label for="tilmMail" class="control-label col-sm-offset-1 col-sm-2">Mail*</label>
            <div class="col-sm-7">
              <input required type="email" class="form-control" id="tilmMail">
            </div>
          </div>
          <div class="form-group">
            <label for="tilmOrg" class="control-label col-sm-offset-1 col-sm-2">Organisation</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="tilmOrg">
            </div>
          </div>
          <div class="form-group">
            <label for="tilmBesk" class="control-label col-sm-offset-1 col-sm-2">Besked</label>
            <div class="col-sm-7">
              <textarea class="form-control" id="tilmBesk"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Medlemskab
                </label>
                <p class="help-block">
                  Medlemskab af ledelseshøjskolefællesskabet indebærer:
                  <br>
                  10% rabat på ledelseshøjskoler, nyhedsbrev, invitationer til særarrangementer, mulighed for at holde oplæg på <br>ledelseshøjskolen og inspirerende netværk. <br>
                  Medlemskabet er gratis.
                </p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
              <button type="submit" class="btn btn-default btn-tilmeld">Tilmeld</button>
            </div>
          </div>
        </form>
      </article>
    </section>