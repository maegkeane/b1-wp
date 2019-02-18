<?php 
/*
  Template Name: News & Events Page 
*/
?> 


<?php get_header(); ?>

<div class="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header><h1><?php the_title(); ?></h1></header>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
  
  <section>
    <h2><?php the_field('news_title'); ?></h2>
    <div class="card-container">

      <?php   
          $the_query = new WP_Query(array( // Define query
            'post_type' => 'news',
            'posts_per_page' => 6,
            'orderby' => 'date'
          ));
          
          if ( $the_query->have_posts() ) {
            echo '<div class="card-container">';
              while ( $the_query->have_posts() ) {
                $the_query->the_post();
                
                $postCategoryID = wp_get_post_categories($post->ID)[0];
                $theCategoryObject = get_category($postCategoryID);
                
                $categorySlug = $theCategoryObject->slug;
        ?>

          <a class="card <?php echo $categorySlug; ?>" <?php if (get_field('annual_report_bg_image') && $categorySlug === 'annual_report') { ?>
            style="background-image: url(<?php echo get_field('annual_report_bg_image')['url']; ?>);"; 
            <?php } ?>
            href="<?php if (get_field('link')) { echo get_field('link'); } else { echo get_the_permalink(); } ?>" target="_blank">

            <div class="outline">
              <h3 class="h3-green"><?php if (get_field($categorySlug)) { echo get_field($categorySlug); } else { echo $theCategoryObject->name; } ?></h3>
              <h2><?php if (get_field('press_release_header') && $categorySlug == 'press_release') { echo strip_tags(get_field('press_release_header'), '<em>');} else { echo get_the_title(); } ?></h2>
              <?php if (get_field('issue_icon')) : ?>
                <img src="<?php echo get_field('issue_icon')['url']; ?>" alt="<?php echo get_field('issue_icon')['alt']; ?>" />
              <?php endif;?> 
              
              <p><?php echo get_field('pdf_note'); ?></p>
            </div>
          </a>

        <?php }
          wp_reset_postdata(); // Restore original post data to prevent unintended functionality          
          
          } else {
              // No posts found
          }
        ?>      
        
        <a class="btn-main" href="news-archive/" target="_blank">News Archive</a>
  </section>
  <a id="calendar"><hr></a>
  <section>
    <h2><?php the_field('calendar_title'); ?></h2>
    
    <section class="secondary">
      <?php 
        $the_query = new WP_Query(array( // Define query
          'post_type' => 'conferences',
          'posts_per_page' => 200, // For conferences, you don't want them to only get 3, you are looking at all of them (say, 200)
          'orderby' => 'date'
        ));
        
        $conferenceCalendarArray = array(); // Overall grid of conferences

        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $conferenceArray = array(       
              'event_name' => get_the_title(),
              'display_date' => get_field('display_date'), 
              'location' => get_field('location'),
              'attendees' => get_field('attendees'),
              'booth' => get_field('booth'),
              'order_date' => get_field('order_date')
            );
            
              // array_push adds an item to the end of an existing array
              array_push($conferenceCalendarArray, $conferenceArray);
            }

          wp_reset_postdata(); // Restore original post data to prevent unintended functionality
            
          } else {
              // No posts found
          }

        function date_compare($a, $b)
        {
          $t1 = strtotime($a['order_date']);
          $t2 = strtotime($b['order_date']);
          return $t1 - $t2;
        }    

        usort($conferenceCalendarArray, 'date_compare');

        echo '<div class="card-container">';
        
        $today = date('U');

        for ($i=0; $i<count($conferenceCalendarArray); $i++) {
          if (strtotime($conferenceCalendarArray[$i]['order_date']) >= $today) {  
        ?> 
          <a class="card_calendar">
            <h3><?php echo $conferenceCalendarArray[$i]['display_date']; ?></h3>
            <h2><?php echo $conferenceCalendarArray[$i]['event_name']; ?></h2>
            <p><?php echo $conferenceCalendarArray[$i]['location']; ?></p>
            <div class="card_calendar_expand">
              <p class="who"><?php echo $conferenceCalendarArray[$i]['attendees']; ?></p>
              <p class="where"><?php echo $conferenceCalendarArray[$i]['booth']; ?></p> 
            </div>
          </a>
        <?php 
            }
          }
        ?>
      </div>
    </section>
  </section>  
  <hr>
<section>
  <div class="light-purple-bg"> <a name="SignUpForm"></a>
    <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	#mc_embed_signup{background:#fff; clear:left; font:13px "ff-tisa-sans-web-pro","Helvetica Neue",Helvetica,Arial,sans-serif; line-height:1.5rem; }
	#mc_embed_signup h2, h3 {font-family:"ff-tisa-web-pro", Georgia, serif; font-size:1.5rem; font-weight:100; margin:10px 0;}
  #mc_embed_signup h3{font-size:.95rem;}
  #mc_embed_signup p{margin:10px 0;}
  #mc_embed_signup ul{list-style-type:none; margin-left:10px; line-height:1.1rem; margin-top:10px;}
  #mc_embed_signup li{overflow:hidden;}
  #mc_embed_signup input[type='checkbox']{float:left;}
  #mc_embed_signup input[type='radio']{float:left;}
  #mc_embed_signup label{float:left; margin-bottom:5px;margin-left:5px;}
  #mc_embed_signup .indicates-required{text-align:right; font-size:.8rem;}
  #mc_embed_signup .asterisk{color:#FF0004;}
</style>
<div id="mc_embed_signup">
<form action="https://bioonepublishing.us3.list-manage.com/subscribe/post?u=c96bf0ec63cc75c323952cced&amp;id=13cf7c0c45" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div id="mc_embed_signup_scroll">
	<h2>We'd like to keep in touch with you.</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group" style="margin-bottom: 10px;">
	<label for="mce-EMAIL">Email address  <span class="asterisk">*</span>&nbsp;
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group input-group">
  <h3><br>
    Get only the emails you want from us:</h3>
    <ul>
      <li>
        <input type="checkbox" value="8192" name="group[8369][8192]" id="mce-group[8369]-8369-0">
        <label for="mce-group[8369]-8369-0"><strong>BioOne News</strong>: <em>Our quarterly newsletter and occasional announcements from the organization.</em></label>
      </li>
      <li><input type="checkbox" value="16384" name="group[8369][16384]" id="mce-group[8369]-8369-1">
      <label for="mce-group[8369]-8369-1"><strong>BioOne Career Center</strong>: <em>Opportunities for employers and job seekers in the biological, ecological, and environmental sciences.</em></label>
      </li>
      <li><input type="checkbox" value="32768" name="group[8369][32768]" id="mce-group[8369]-8369-2">
      <label for="mce-group[8369]-8369-2"><strong>BioOne Complete</strong>: <em>Timely &amp; trending research to help you stay up-to-date.</em></label>
      </li>
</ul>
</div>

<div class="mc-field-group input-group">
    <h3>Email Format </h3>
    <ul><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">html</label>
    </li>
      <li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">text</label></li>
</ul>
</div>
      <p style="font-size:.95em;">BioOne will use the information on this form to be in touch with you. We will never sell or share your data and you may opt-out at any time. See our <a href="http://www.bioone.org/page/privacy_policy">privacy practices</a> for details.</p>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c96bf0ec63cc75c323952cced_13cf7c0c45" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Sign me up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[5]='FNAME';ftypes[5]='text';fnames[4]='LNAME';ftypes[4]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ORG';ftypes[3]='text';fnames[12]='DEPT';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='dropdown';fnames[17]='MMERGE17';ftypes[17]='dropdown';fnames[6]='TITLE';ftypes[6]='text';fnames[1]='ADDR1';ftypes[1]='text';fnames[2]='ADDR2';ftypes[2]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='CITY';ftypes[8]='text';fnames[9]='STATE';ftypes[9]='text';fnames[10]='ZIP';ftypes[10]='text';fnames[14]='CUSNUM';ftypes[14]='text';fnames[11]='MMERGE11';ftypes[11]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
  </div>
</section> 
  </div>
</div>

<?php get_footer(); ?>