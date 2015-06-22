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
              <circle class="tl-punkt" id="tl-p1" cx="30%" cy="50%"></circle>
              <circle class="tl-punkt" id="tl-p2" cx="50%" cy="50%"></circle>
              <circle class="tl-punkt" id="tl-p3" cx="70%" cy="50%"></circle>
            </svg>
          </div>

          <div class="tl-cont tl-p1-cont">
            <div class="col-md-3">
              <div class="col-md-12">
                <h2>Samskabende workshop</h2>
                <h3>Sagnlandet i Lejre</h3>
                <h5>13. maj 2015</h5>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-dokushop btn-dokushop-p3">Dokushop</button>
              </div>
            </div>

            <p class="col-md-3 tidlhojsk-beskr_bodyc">
              Ledelseshøjskolefællesskabet afholdt samskabende workshop i Sagnlandet i Lejre med ledere fra forskellige brancher for at få testet Ledelseshøjskolens idé og koncept. Workshoppen blev afholdt som et eksempel på en højskole og dialogen viste stor opbakning til at fortsætte arbejde med at gøre ledelseshøjskolen til virkelighed.
              <br><br>
              Programmet indeholdt en præsentation af ledelseshøjskolens idé som ramme for ledelsesudvikling af ledere, et oplæg om bæredygtig ledelse, drøftelse i dialoggrupper, musikalsk indslag og afsluttende indtagelse af Sagnlandsspecialiteten ”Vikinge-gryde”.  Alle blev inspireret i rammen og af det fælles engagement.
              <br><br>
              <blockquote class="col-md-6 col-md-offset-1">
                <p>Ledelseshøjskolen er en nødvendighed.</p>
                <cite class="tidlhojsk-beskr_citat">- deltager på den samskabende workshop</cite>
              </blockquote>
            </p>
          </div>

          <div class="tl-cont tl-p2-cont">
            <div class="col-md-3">
              <div class="col-md-12">
                <h2>Verdens første ledelseshøjskole</h2>
                <h3>Den Frie Lærerskole <br>Ollerup, Svendborg</h3>
                <h5>16. - 18. november 2015</h5>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-dokushop btn-dokushop-p2">Dokushop</button>
              </div>
            </div>

            <p class="col-md-3 tidlhojsk-beskr_bodyc">
              Den skabende kraft i ledelse” handler om at finde ny inspiration til at skabe selvbilleder, relationer og rytme i sig selv og sine omgivelser – om at navigere i kompleksitet. Gennem workshops med spejlinger i litteratur, kunst, moderne kompleksitetsteori og personlig format i ledelse – åbnes op for ny indsigt og dialoger med henblik på undersøgelse af, hvad der egentlig skaber ledelse og hvad ledelse skaber.
              <br><br>
              Ledelse kan ses som væren pulseren og bevægelse ind og ud af balance og i det, gøre dette til en del af sig selv. <!-- Musikken er allerede i medarbejderen og organisationen – at lytte til denne puls og energi er afgørende for at time sin ledelse og forløse vigtige og nødvendige ressourcer. Hvad er din ledelsespuls? -->
              <br><br>
              <blockquote class="col-md-6 col-md-offset-1">
                <p>Du kan kun lede det, din kontekst skaber af ledelse i dig.</p>
                <cite class="tidlhojsk-beskr_citat">- deltager på den samskabende workshop</cite>
              </blockquote>
            </p>
          </div>

          <div class="tl-cont tl-p3-cont">
            <div class="col-md-3">
              <div class="col-md-12">
                <h2 class="tl-p-future-headline">Meldes ud i septemper 2015</h2>
              </div>
            </div>
          </div>

        </article>
      </div>

      <div class="tidlhoj-pic_overlay tl-p1-contpic-overl"></div>
      <div class="tidlhoj-pic tl-p1-contpic"></div>
      <div class="tidlhoj-pic_overlay tl-p2-contpic-overl"></div>
      <div class="tidlhoj-pic tl-p2-contpic"></div>
      <div class="tidlhoj-pic_overlay tl-p3-contpic-overl"></div>
      <div class="tidlhoj-pic tl-p3-contpic"></div>
    </section>