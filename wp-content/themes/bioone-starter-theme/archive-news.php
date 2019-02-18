<?php 
/*
Template Name: News Archive
*/
;?> 

<?php get_header(); ?>

<div class="content">
  <header><h1>News Archive</h1></header>
  <section>  
    <div class="card-container">
      <?php   
          $the_query = new WP_Query(array( // Define query
            'post_type' => 'news',
            'posts_per_page' => 900,
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
    </div>      
  </section>
  <a href="http://www.bioonepublishing.org/news-events/">Back to News &amp; Events</a>
  <a class="btn-main" href="http://www.bioonepublishing.org/news-events/">Back to News &amp; Events</a>
</div>

<?php get_footer(); ?>