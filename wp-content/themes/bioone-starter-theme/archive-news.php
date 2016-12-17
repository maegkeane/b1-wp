<?php get_header(); ?>
<div class="content">
    <header><h1>News Archive</h1></header>
    
    <ol>
      
      <?php $the_query = new WP_Query(array( // Define query
          'post_type' => 'news',
          'orderby' => 'date'
        ));
        
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post();

            $postCategoryID = wp_get_post_categories($post->ID)[0];
            $theCategoryObject = get_category($postCategoryID);
              
            $categorySlug = $theCategoryObject->slug;
      ?>

        <li>
          <h5><?php echo get_field($categorySlug); ?> |
            <a href="<?php if (get_field('link')) { echo get_field('link'); } else { echo get_the_permalink(); } ?>" target="_blank">
              <?php if (get_field('press_release_header') && $categorySlug == 'press_release') { echo strip_tags(get_field('press_release_header'), '<em>');} else { echo get_the_title(); } ?>
            </a>
          </h5>
        </li>
      <?php } wp_reset_postdata(); } else {} ?>
    
    </ol>
  </section>
</div>
<?php get_footer(); ?>