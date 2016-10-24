<?php 
/*
  Template Name: Our Work Page 
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
  
  <section>
    <a href="<?php echo get_field('bioone_complete_link'); ?>">
      <img class="pub-logo" src="<?php echo get_field('bioone_complete_logo')['url']; ?>" alt="<?php echo get_field('bioone_complete_logo')['alt']; ?>"/>
    </a>
    <p><?php echo get_field('bioone_complete_description'); ?></p>   
    <div class="flex-container">
      <section class="flex-1stcol">
        <h2><?php echo get_field('new_titles_header'); ?></h2>
        <?php echo get_field('new_titles'); ?>
      </section>
      <section class="flex-2ndcol_leftborder">
         <h2>Subject Areas</h2>
        <?php echo get_field('subject_areas'); ?>
      </section>  
    </div>  
    <a class="btn-main" href="<?php echo get_field('bioone_complete_link'); ?>"><?php echo get_field('bioone_complete_button'); ?></a>
  </section>
  <section>
    <a href="<?php echo get_field('elementa_link'); ?>">
      <img class="pub-logo" src="<?php echo get_field('elementa_logo')['url']; ?>" alt="<?php echo get_field('elementa_logo')['alt']; ?>"/>
    </a>
    <p><?php echo get_field('elementa_description'); ?></p>   
    <a class="btn-main" href="<?php echo get_field('elementa_link'); ?>"><?php echo get_field('elementa_button'); ?></a>
  </section>

</article>

<?php get_footer(); ?>
