<?php get_header('homepage'); ?>

<article>
  <section>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
      	<?php the_content(); ?>

    <?php endwhile; endif; ?>

  </section>
</article>

<?php get_footer(); ?>