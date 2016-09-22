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
  <div class="light-purple-bg">
  <h2>Stay Up to Date</h2>
      <p>Everyone has a full inbox. That's why we only send you essential updates and a seasonal newsletter to keep you up to speed.</p>
<!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="//bioone.us3.list-manage.com/subscribe/post?u=c96bf0ec63cc75c323952cced&amp;id=13cf7c0c45" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
          <div class="sign-up-list">
            <div class="sign-up-col1">
            I am a
            </div>
            <div class="sign-up-col2">
              <ul>
                <li><input type="radio" value="16384" name="group[11821]" id="mce-group[11821]-11821-0"><label for="mce-group[11821]-11821-0">Researcher</label></li>
                <li><input type="radio" value="32768" name="group[11821]" id="mce-group[11821]-11821-1"><label for="mce-group[11821]-11821-1">Librarian</label></li>
              </ul>
            </div>
            <div class="sign-up-col3">
              <ul>  
                <li><input type="radio" value="65536" name="group[11821]" id="mce-group[11821]-11821-2"><label for="mce-group[11821]-11821-2">Publisher</label></li>
                <li><input type="radio" value="131072" name="group[11821]" id="mce-group[11821]-11821-4"><label for="mce-group[11821]-11821-4">Other</label></li>
              </ul>
            </div>
          </div>
          <div class="mc-field-group" style="display: inline">
            <label for="mce-EMAIL">and my email address is</label><br />
            <input type="email" value="Enter your email" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_c96bf0ec63cc75c323952cced_13cf7c0c45" tabindex="-1" value="">
            </div>
              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-main">
            </div>
        </form>
      </div>
<!--End mc_embed_signup-->
  </div>  
</article>

<?php get_footer(); ?>