<?php 
/*
  Template Name: Who We Are Page 
*/
?> 


<?php get_header(''); ?>

<article>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	
    <header>		
  	    <h1><?php the_title(); ?></h1>
    </header>

    <?php the_content(); ?>

  <?php endwhile; endif; ?>
  
  <hr>

  <section>
    <!--HQ-->
    <h2><?php the_field('team_header'); ?></h2>
    <p><?php the_field('team_description'); ?></p>
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
            <a href="<?php echo $email; ?>"><?php echo $email; ?></a> <br />          
            <a href="<?php echo $linkedin; ?>" target="_blank">
              <img class="bio-icon" src="<?php bloginfo('template_url'); ?>/img/social/linkedin.png" alt="linkedin" />
            </a>          
          </h4>
          <?php echo $bio; ?>
        </div>  
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </section>
  <section>
    <!--BOARD-->
    <h3><?php the_field('board_header'); ?></h3>
    <p><?php the_field('board_description');?></p>
    <div class="flex-grid">
      <?php if (have_rows('bio_grid_board') ) : while (have_rows ('bio_grid_board') ) : the_row(); 
    
        $name = get_sub_field('name');
        $position = get_sub_field('position');
        $affiliation = get_sub_field('affiliation');
        $degree = get_sub_field('degree');
        $bio = get_sub_field('bio');

      ?>

      <div class="bio-list-item">
        <a class="bio-list-item_short-bio-container">
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
  </section>
  <section>
    <!--SALES TEAM-->
    <h3><?php the_field('sales_staff_header'); ?></h3>
    <p><?php the_field('sales_staff_description'); ?></p>
    <h4 class="bold"><?php the_field('global_director_name'); ?></h4>
    <h4><?php the_field('global_director_position'); ?></h4>
    <?php the_field('global_director_address'); ?>
    <br />
    <h4 class="bold">Account Managers by Region</h4>
    <hr class="secondary">
    <?php if( have_rows( 'bio_grid_sales' ) ) : while ( have_rows( 'bio_grid_sales' ) ) : the_row(); 

      $name = get_sub_field('name');
      $title = get_sub_field('title');
      $area = get_sub_field('sales_area');
      $number = get_sub_field('phone_number');
      $email = get_sub_field('email');
      $address = get_sub_field('address');
      $bio_snippet = get_sub_field('bio_snippet');
      $full_bio = get_sub_field('full_bio');

    ?>

    <h5><?php echo $area; ?></h5>
    <p><?php echo $name; ?><br />
    <?php echo $title; ?><br />
    <a href="mailto:<?php echo $email;?>"><?php echo $email; ?></a><br />
      <?php echo $number; ?></p>


    <?php endwhile; endif; wp_reset_postdata(); ?>
  </section>
</article>

<?php get_footer(); ?>