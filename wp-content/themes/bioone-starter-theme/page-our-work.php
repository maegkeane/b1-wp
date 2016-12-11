<?php 
/*
  Template Name: Our Work Page 
*/
?> 

<?php get_header(); ?>

<div class="content">
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <header><h1><?php the_title(); ?></h1></header>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>
  <hr>
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
  <hr>
  <section>
    <a href="<?php echo get_field('elementa_link'); ?>">
      <img class="elementa-logo" src="<?php echo get_field('elementa_logo')['url']; ?>" alt="<?php echo get_field('elementa_logo')['alt']; ?>"/>
    </a>
    <p><?php echo get_field('elementa_description'); ?></p>   
    <a class="btn-main" href="<?php echo get_field('elementa_link'); ?>"><?php echo get_field('elementa_button'); ?></a>
  </section>
  <hr>
  <section>
    <h1>Initiatives &amp; Resources</h1>
    <h2>Community Tools</h2>
    <?php echo get_field('community_tools_description'); ?>
    <br />
    <h2><?php echo get_field('dev_world_title');?></h2>
    <div class="flex-container">
      <section class="flex-1stcol">
        <?php echo get_field('dev_world_description');?>
        <div class="flex-nested-row">
         
        <?php if( have_rows( 'dev_world_logos' ) ) : while ( have_rows( 'dev_world_logos' ) ) : the_row(); 
          $link = get_sub_field('link');
          $logo = get_sub_field('logo');
        ?> 
          <a href="<?php echo $link; ?>">
            <img class="notb1-logo" src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'] ?>">
          </a>

        <?php endwhile; endif; wp_reset_postdata(); ?> 
        
        </div>
      </section>
      <section class="flex-2ndcol_leftborder">
        <a class="btn-main" href="http://www.bioone.org/page/subscribe/developing_world_programs">Country list</a> <br/>
        <small><?php echo get_field('dev_world_info'); ?></small>
      </section>  
    </div>
  </section>
  <hr>  
  <section>
    <h2><?php echo get_field('ppm_header'); ?></h2>
    <p><?php echo get_field('ppm_description'); ?></p>
  </section>
  <hr>
  <section>
    <h2><?php echo get_field('presentations_header'); ?></h2>
    <h3><?php echo get_field('secondary_header'); ?></h3>
    
    <ul class="long-list">
    
    <?php if( have_rows( 'selected_staff_presentations' ) ) : while ( have_rows( 'selected_staff_presentations' ) ) : the_row(); 
      $author = get_sub_field('author');
      $year = get_sub_field('year');
      $link = get_sub_field('link');
      $title = get_sub_field('title');
      $conference = get_sub_field('conference');
      $date = get_sub_field('date');
      $location = get_sub_field('location');
    ?>

    <li><?php echo $author; ?>. <?php echo $year; ?>. <a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?>.</a> <?php echo $conference; ?>, <?php echo $date; ?>, <?php echo $location; ?>.</li>

    <?php endwhile; endif; wp_reset_postdata(); ?>
    
    </ul>
    <h3><?php get_field('articles_header'); ?></h3>
    <ul class="long-list">
    
    <?php if( have_rows( 'selected_articles' ) ) : while ( have_rows( 'selected_articles' ) ) : the_row(); ?>

      <li><?php get_sub_field('citation'); ?></li>

    <?php endwhile; endif; wp_reset_postdata(); ?>
    
    </ul>
  </section>
</div>

<?php get_footer(); ?>