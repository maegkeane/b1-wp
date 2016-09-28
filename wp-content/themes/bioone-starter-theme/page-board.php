<?php 
/*
  Template Name: Board Page 
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

  <div class="flex-grid">
  <?php if (have_rows('bio_grid') ) : while (have_rows ('bio_grid') ) : the_row(); 
    

      $bio_photo = get_sub_field('bio_photo');
      $name = get_sub_field('name');
      $position = get_sub_field('position');
      $affiliation = get_sub_field('affiliation');
      $degree = get_sub_field('degree');
      $bio = get_sub_field('bio');

    ?>

    <div class="bio-list-item">
      <a class="bio-list-item_short-bio-container">
        <img class="bio-list-item_image" src="<?php echo $bio_photo['url']; ?>" alt="<?php echo $bio_photo['alt'] ?>" /> 
        <p class="bio-list-item_info">
          <span class="bio-list-item_name">
            <?php echo $name; ?>
          </span>
            </br>
            <?php echo $affiliation; ?>
        </p>
      </a>
      <div class="bio-list-item_modal">
        <span class="close">X</span>
        <h2><?php echo $name; ?></h2> 
        <?php echo $bio; ?>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </div> 
</article>


<?php get_footer(); ?>