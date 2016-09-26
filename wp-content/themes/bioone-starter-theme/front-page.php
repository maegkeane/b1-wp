<?php get_header('homepage'); ?>

<article>
  <section>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
      	<?php the_content(); ?>

    <?php endwhile; endif; ?>

  </section>
  <section>

    <h1>From the Community</h1>
    <div class="cycle-slideshow" 
    data-cycle-fx=scrollHorz
    data-cycle-timeout=0
    data-cycle-pause-on-hover="true"
    data-cycle-slides="> blockquote"
    >
    
    <div class="cycle-prev"></div>
    <div class="cycle-next"></div>
    
    <?php if( have_rows( 'testimonials' ) ) : while ( have_rows( 'testimonials' ) ) : the_row(); 

      $blockquote = get_sub_field('blockquote');
      $name = get_sub_field('name');
      $title = get_sub_field('title');
      $institution = get_sub_field('institution');

    ?>

      <blockquote>       
        <?php echo strip_tags($blockquote); ?>
        <p class="blockquote-source">– <?php echo $name; ?> <br /><?php echo $title; ?>, <?php echo $institution; ?></p>
      </blockquote>

    <?php endwhile; endif; wp_reset_postdata(); ?>
    
    </div>

</section>
</article>

<?php get_footer(); ?>