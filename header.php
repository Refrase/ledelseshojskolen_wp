<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/ic/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="ic/touch-icon-57.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ic/touch-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="ic/touch-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="ic/touch-icon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="ic/touch-icon-180.png">

    <?php wp_head(); ?>

    <!-- KIG PÅ AT INSTALLERE BOWER TIL DEPENDENCIES OG GRUNT TIL BUILD -->
    <!-- HER VAR I NÆVNTE RKFØLGE: 'font-awesome.css', 'style.css', 'modernizr.js'  -->
  </head>

  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">Din browser kan ikke følge med vores toptunede side! Opgradér venligst din browser <a href="http://browsehappy.com/">her</a> for at forbedre din oplevelse af internettet.</p>
    <![endif]-->

    <!--//////////////////// Navigation \\\\\\\\\\\\\\\\\\\\-->
    <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="#intro"><?php bloginfo('name'); ?></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="nav-main">

            <?php
              $defaults = array(
                'menu'            => 'Hovedmenu',
                'theme_location'  => 'Hovedmenu',
                'depth'           => 2,
                // 'container'       => 'div',
                // 'container_class' => 'collapse navbar-collapse',
                // 'container_id'    => 'nav-main',
                'menu_class'      => 'nav navbar-nav',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
              );
              wp_nav_menu( $defaults );
            ?>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="pf-link" href="http://www.playingfield.dk">
                  <img src="<?php bloginfo('template_directory'); ?>/images/icons/ic_sommerf_beige.svg">
                </a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>