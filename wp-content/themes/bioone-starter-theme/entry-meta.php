<section class="entry-meta">
<span class="meta-sep"></span>
<?php if (in_category('press_release', $post->ID)) : ?>
  <h5>Released: <?php the_time( get_option('date_format') ); ?></h5>
<?php else : ?>
  <h5><?php the_time( get_option('date_format') ); ?></h5>
<?php endif; ?>
</section>