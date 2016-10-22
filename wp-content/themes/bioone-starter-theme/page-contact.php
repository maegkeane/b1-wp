<?php 
/*
  Template Name: Contact Page 
*/
?> 


<?php get_header(); ?>

<article>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	
  <section>
    <?php the_content(); ?>

    <?php endwhile; endif; ?>
 
  </section>
</article>

<?php get_footer(); ?>