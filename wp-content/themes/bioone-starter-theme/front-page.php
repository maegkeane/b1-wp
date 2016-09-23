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
    data-cycle-fx="fade" 
    data-cycle-timeout="20000"
    data-cycle-slides="> blockquote"
    >

    <?php if( have_rows( 'testimonials' ) ) : while ( have_rows( 'testimonials' ) ) : the_row(); 

      $blockquote = get_sub_field('blockquote');
      $name = get_sub_field('name');
      $title = get_sub_field('title');
      $institution = get_sub_field('institution');

    ?>
      <blockquote>
        <?php echo $blockquote; ?>
        <p class="blockquote-source">– <?php echo $name; ?> <br /><?php echo $title; ?>, <?php echo $institution; ?></p>
      </blockquote>

    <?php endwhile; endif; wp_reset_postdata(); ?>
    
    </div>

</section>
</article>

<?php get_footer(); ?>