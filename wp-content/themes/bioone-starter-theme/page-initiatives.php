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

  <section>
    <h2>Developing World Programs</h2>
    <div class="flex-container">
      <section class="flex-1stcol">
        <p>BioOne is a proud participant in five leading developing world initiatives&mdash;HINARI, AGORA, OARE (collectively known as Research4Life), EIFL, and TEEAL&mdash;that provide qualifying nations with access to scholarly content at no cost.</p> 
        <p>Through these programs, BioOne makes its full-text journal aggregation, BioOne Complete, available free of charge to over 2,500 institutions throughout the developing world. This benefits the entire scientific community, adds to the visibility and prestige of BioOne’s content, and provides students and researchers in these countries with access to critical and current research.</p>
        <div class="flex-nested-row">
         
        <?php if( have_rows( 'dev_world_logos' ) ) : while ( have_rows( 'dev_world_logos' ) ) : the_row(); 
          $link = get_sub_field('link');
          $logo = get_sub_field('logo');
        ?> 
          <a href="<?php echo $link; ?>"><img class="notb1-logo" src="<?php echo $logo ;?>" alt="Research4Life logo"></a>
          
                  <img class="bio-list-item_image" src="<?php echo $bio_photo['url']; ?>" alt="<?php echo $bio_photo['alt'] ?>" /> 

        <?php endwhile; endif; wp_reset_postdata(); ?> 
        
        </div>
      </section>
      <section class="flex-2ndcol_leftborder">
        <a class="btn-main" href="http://www.bioone.org/page/subscribe/developing_world_programs">Country list</a> <br/>
        <small><?php get_field('dev_world_info'); ?></small>
      </section>  
    </div>
  </section>  
  <section>
    <h2><?php get_field('ppm_header'); ?></h2>
    <h3><?php get_field('ppm_description'); ?></h3>
  </section>
  <section>
    <h2><?php get_field('presentations_header'); ?></h2>
    <h3><?php get_field('secondary_header'); ?></h3>
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