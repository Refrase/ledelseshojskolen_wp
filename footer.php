 <footer id="nyhedsb">
      <div class="container-fluid">
        <form class="form form-newsletter form-horizontal col-sm-6 col-sm-offset-3">
          <div class="form-group">
            <h2>Nyhedsbrev</h2>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="newslMail" placeholder="Mail" />
              <p class="help-block">Udsendes 2-4 gange om året.</p>
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-default btn-tilmeld btn-newsl">Tilmeld</button>
            </div>
          </div>
        </form>

        <ul class="footer-btm">

          <ul class="footer-btm-left">
            <li>Hornsherredvej 416A</li>
            <li>4070 Kirke Hyllinge</li>
            <a href="mailto:dennis.rasmussen@playingfield.dk">
              <li>dennis.rasmussen@playingfield.dk</li>
            </a>
            <li>+45 42 68 01 40</li>
          </ul>

          <ul class="footer-btm-center">
            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/ic_sommerf_mgron.svg" /></li>
            <h3>&copy; <?php echo date( 'Y' ); ?> Ledelseshøjskolen</h3>
          </ul>

          <ul class="footer-btm-right">
            <!-- LinkedIn -->
            <a href="http://www.linkedin.com/shareArticle?url=http%3A//ledelseshojskolen.dk">
              <li><i class="fa fa-linkedin fa-2x btn-share"></i></li>
            </a>
            <!-- Twitter -->
            <a href="http://twitter.com/share?url=http%3A//ledelseshojskolen.dk&text=Playingfields+Ledelsesh&#248;jskole">
              <li><i class="fa fa-twitter fa-2x btn-share"></i></li>
            </a>
            <!-- Facebook -->
            <a href="http://www.facebook.com/sharer.php?u=http%3A//ledelseshojskolen.dk&t=Playingfields+Ledelsesh&#248;jskole">
              <li><i class="fa fa-facebook fa-2x btn-share"></i></li>
            </a>
          </ul>

        </ul>
      </div>
    </footer>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

	<?php wp_footer(); ?>

</body>
</html>
