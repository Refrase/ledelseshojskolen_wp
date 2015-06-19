
<?php global $post; ?>

  <section>
    <div class="container">
      <article id="<?php echo $post->post_name; ?>" <?php echo post_class(); ?>>

				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>

      </article>
    </div>
  </section>

