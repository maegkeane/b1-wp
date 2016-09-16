<?php 
/*
  Template Name: News & Events Page 
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
 
  <h2><?php the_field('news_title'); ?></h2>
   <div class="card-container">
    
    <?php if (have_rows('news_grid') ) : while (have_rows ('news_grid') ) : the_row(); 
    

      $news_type = get_sub_field('news_type');
      $news_item_name = get_sub_field('news_item_name');
      $link = get_sub_field('link');
      $report_bg = get_sub_field('report_bg');
      $issue_icon = get_sub_field('issue_icon');
      $pdf_note = get_sub_field('pdf_note');

    ?>
    
    <a class="card" href="<?php echo $link; ?>" target="_blank">  
      <h3><?php echo $news_type; ?></h3>
      <h2><?php echo strip_tags($news_item_name); ?></h2>
      <!--need "if"/"while" statement--> 
      <img src="<?php echo $issue_icon['url']; ?>" alt="<?php echo $issue_icon['alt']; ?>" />
      <p class="card_PDF"><?php echo $pdf_note; ?></p>
    </a>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>

  <a class="btn-main" href="http://www.bioone.org/action/showNews?type=archive" target="_blank">More News</a>
  
  <a id="calendar"><hr></a>
  <h2><?php the_field('calendar_title'); ?></h2>
  <h3><?php the_field('calendar_subhead'); ?></h3>
  
  
  <?php
    $map = get_field('map'); 
    if (!empty($map) ) : 
  ?> 
    <img id="map" src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>" />
  <?php endif; ?>


  <div class="card-container">

    <?php if( have_rows( 'calendar_grid' ) ) : while ( have_rows( 'calendar_grid' ) ) : the_row(); 

      $date= get_sub_field('date');
      $event_name = get_sub_field('event_name');
      $location = get_sub_field('location');
      $link = get_sub_field('link');
      $booth = get_sub_field('booth');
      $attendees = get_sub_field('attendees')

    ?>
    
    <a class="card_calendar" href="<?php echo $link; ?>" target="_blank">  
      <h3><?php echo $date; ?></h3>
      <h2><?php echo $event_name; ?></h2>
      <p><?php echo $location; ?></p>
      <div class="card_calendar_expand">
        <p><?php echo $booth; ?> </p>
        <p><?php echo $attendees; ?> </p>
      </div>
    </a>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
  <hr>

</article>

<?php get_footer(); ?>