<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php edit_post_link(); ?>
    <?php if (get_field('press_release_header')) : ?>
      <h2><?php echo strip_tags(get_field('press_release_header'), '<em>'); ?></h2>
    <?php else : ?>
      <h2><?php the_title(); ?></h2>
    <?php endif; ?>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
    <?php if (!is_search()) get_template_part('entry', 'meta'); ?>
  </header>

  <?php if (in_category('press_release', $post->ID)) : ?>
    <?php echo the_field('press_release_description');?>
  <?php endif; ?>

  <?php get_template_part('entry', (is_archive() || is_search() ? 'summary' : 'content')); ?>
  <a class="btn-main" href="http://www.bioonepublishing.org/news-events/">Back to News Archive</a>

  <?php if (comments_open($post->ID)) : ?>
    <?php comments_template( '', true); ?>
  <?php endif; ?> 