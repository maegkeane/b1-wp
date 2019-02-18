<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php edit_post_link(); ?>
    <h2><?php echo strip_tags(get_field('press_release_header'), '<em>'); ?></h2>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
    <?php if (!is_search()) get_template_part('entry', 'meta'); ?>
  </header>

  <?php echo the_field('press_release_description');?>
  <?php get_template_part('entry', (is_archive() || is_search() ? 'summary' : 'content')); ?>
  <a class="btn-main" href="http://www.bioonepublishing.org/news-events/">Back to News Archive</a>