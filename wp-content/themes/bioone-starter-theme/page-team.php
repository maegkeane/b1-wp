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
      $degree = get_sub_field('degree');
      $title = get_sub_field('title');
      $phone_number = get_sub_field('phone_number');
      $email = get_sub_field('email');
      $linkedin = get_sub_field('linkedin');
      $bio = get_sub_field('bio');

    ?>
 
    <div class="bio-list-item">
      <a class="bio-list-item_short-bio-container">
        <img class="bio-list-item_image" src="<?php echo $bio_photo['url']; ?>" alt="<?php echo $bio_photo['alt'] ?>" /> 
        <p class="bio-list-item_info">
          <span class="bio-list-item_name">
            <?php echo $name; ?>
          </span>
          <br />
          <?php echo $title; ?>
          <br />
          <a class="bio-list-item_email" href="mailto:<?php echo $email ;?>"><?php echo $email; ?></a>          
        </p>
      </a>
      
      <div class="bio-list-item_modal">
        <span class="close">X</span>
        <h2><?php echo $name; ?></h2>
        <h4 class="not-bold">
          <?php echo $title; ?> <br />
          <?php echo $phone_number; ?> <br />
          <a href="<?php echo $email ;?>"><?php echo $email; ?></a> <br />          
          <a href="<?php echo $linkedin;?>" target="_blank">
            <img class="bio-icon" src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="linkedin" />
          </a>
        
        </h4>
        <?php echo $bio; ?>
      </div>  
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>

  <h3><?php the_field('sales_staff_header'); ?></h3>

  <div class="flex-grid">
    
    <?php if( have_rows( 'bio_grid_sales' ) ) : while ( have_rows( 'bio_grid_sales' ) ) : the_row(); 

      $name = get_sub_field('name');
      $degree = get_sub_field('degree');
      $title = get_sub_field('title');
      $phone_number = get_sub_field('phone_number');
      $email = get_sub_field('email');
      $bio = get_sub_field('bio');

    ?>
 
    <div class="bio-list-item">
      <a class="bio-list-item_short-bio-container">
        <p class="bio-list-item_info">
          <span class="bio-list-item_name">
            <?php echo $name; ?>
          </span> 
          <br />
          <?php echo $title; ?>
        </p>
      </a>
      <div class="bio-list-item_modal">
        <span class="close">X</span>
        <h2><?php echo $name; ?></h2>
        <h4><?php echo $title; ?><br />
        <?php echo $phone_number; ?> <br />
          <a href="mailto:<?php echo $email; ?>"> 
            <?php echo $email; ?>
          </a>
        </h4>
        <?php echo $bio; ?>
      </div>  
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
</article>

<?php get_footer(); ?>