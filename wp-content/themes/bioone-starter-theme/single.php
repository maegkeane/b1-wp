<?php get_header(); ?>
<div class="content">
  <section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <?php get_template_part('entry'); ?>
    <?php endwhile; endif; ?>
  </section>
</div>
<?php get_footer(); ?>