<?php 
/*
  Template Name: Team Page 
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
 
  <h3><?php the_field('hq_staff_header'); ?></h3>

  <div class="flex-grid">

    <?php if( have_rows( 'bio_grid_hq' ) ) : while ( have_rows( 'bio_grid_hq' ) ) : the_row(); 

      $bio_photo = get_sub_field('bio_photo');
      $name = get_sub_field('name');
      $title = get_sub_field('title');

    ?>
 
    <div class="bio-list-item">
      <a class="bio-list-item_short-bio-container">
        <img class="bio-list-item_image" src="<?php echo $bio_photo['url']; ?>" alt="<?php echo $bio_photo['alt'] ?>" /> 
        <p class="bio-list-item_info">
            <?php echo $name; ?> <br />
          <?php echo $title; ?>
        </p>
      </a>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>

  <h3><?php the_field('sales_staff_header'); ?></h3>

  <div class="flex-grid">
    
    <?php if( have_rows( 'bio_grid_sales' ) ) : while ( have_rows( 'bio_grid_sales' ) ) : the_row(); 

      $bio_photo = get_sub_field('bio_photo');
      $name = get_sub_field('name');
      $title = get_sub_field('title');

    ?>
 
    <div class="bio-list-item">
      <a class="bio-list-item_short-bio-container">
        <img class="bio-list-item_image" src="<?php echo $bio_photo['url']; ?>" alt="<?php echo $bio_photo['alt'] ?>" /> 
        <p class="bio-list-item_info">
          <?php echo $name; ?> <br />
          <?php echo $title; ?>
        </p>
      </a>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
</article>

<?php get_footer(); ?>