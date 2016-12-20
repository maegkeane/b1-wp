<?php 
/*
  Template Name: Contact Page 
*/
?> 

<?php get_header(); ?>

<div class="content">
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>
  <section>
    <?php if (have_rows('logos_for_press') ) : while (have_rows ('logos_for_press') ) : the_row(); ?>
    <a href="<?php get_sub_field('logo_link'); ?>"><img class="press-logos" src="<?php echo get_sub_field('logo_image')['url']; ?>" alt="<?php echo get_sub_field('logo_image')['alt'] ?>" /></a>
    <p><a href="<?php get_sub_field('logo_link'); ?>"><?php echo get_sub_field('logo_name'); ?></a></p>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </section>
  <section>
      <?php the_field('promotional_text'); ?>
  </section>  
</div>

<?php get_footer(); ?>