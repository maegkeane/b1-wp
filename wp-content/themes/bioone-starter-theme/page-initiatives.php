<?php 
/*
  Template Name: Initiatives & Resources Page 
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
  <hr>
  <section>
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
            <img class="notb1-logo" src="<?php echo $logo ;?>" alt="<?php echo $logo['alt'] ?>">
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
</article>

<?php get_footer(); ?>