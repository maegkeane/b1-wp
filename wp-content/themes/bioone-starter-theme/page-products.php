<?php 
/*
  Template Name: Our Products Page 
*/
?> 


<?php get_header(); ?>

<article>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <header>    
        <h1><?php the_title(); ?></h1>
    </header>

    <?php the_content(); ?>

  <?php endwhile; endif; ?>

  <?php if( have_rows( 'publication_list' ) ) : while ( have_rows( 'publication_list' ) ) : the_row(); 

    $logo = get_sub_field('logo');
    $link = get_sub_field('link');
    $description = get_sub_field('description');
    $button = get_sub_field('button');

  ?>
    <a href="<?php echo $link; ?>">
      <img class="pub-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
    </a>

  <section>
    <p><?php echo $description; ?></p>
  </section>
 
  <section>  
    <a class="btn-main" href="<?php echo $link; ?>"><?php echo $button; ?></a>
  </section>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</article>

<?php get_footer(); ?>
