<?php 
/*
  Template Name: Our Story Page 
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

<!--this is the static code for reference-->

  <h2><?php ?></h2>
  <p><?php ?></p>
  <aside class="left"><?php ?>
  </aside>
  <p><?php ?></p>
  <h2><?php ?></h2>
  <p><?php ?></p> 
  <aside class="right"><?php ?>
  <h2><?php ?></h2>
  <p><?php ?></p> 
  <hr>
</article>  
<article>
  <h1><?php ?></h1>
  <div class="timeline-flex">
    <div class="timeline-rule"></div>
    <div class="timeline-item-container">
    <!--repeater-->
      <div class="timeline-item">
        <h3><p><?php ?></p> </h3>
        <h2><p><?php ?></p> </h2>
        <p><?php ?></p>
      </div>
     <!--repeater-->
    </div>
  </div>
</article>
<article>
  <hr>
  <h1><?php ?></h1>
  <h2><?php ?></h2>
  <p><?php ?></p> 
  <h2><?php ?></h2>
  <div id="story-founder-logos">
    <!--repeater-->
    <a href="https://www2.allenpress.com/ target="_blank""><img src="images/logo-ap.png" alt="Allen Press logo" ></a>
    <a href="http://www.gwla.org/" target="_blank"> <img src="images/logo-gwla.jpg" alt="Greater Western Library Alliance logo"></a>
    <a href="https://www.aibs.org/home/index.html" target="_blank"><img src="images/logo-aibs.png" alt="American Institute of Biological Sciences logo" ></a>
    <a href="https://www.ku.edu/" target="_blank"><img src="images/logo-ku.png" alt="University of Kansas logo" ></a>
    <a href="http://sparcopen.org/" target="_blank"><img src="images/logo-sparc.png" alt="SPARC logo"></a>
    <!--repeater-->
  </div>
  <h2><?php ?></h2>
  <a class="btn-secondary-charter">Show list</a>
  <div id="charter-supporters-container">
    <ul>
      <!--repeater-->
      <li class="list-item">American Museum of Natural History</li>
      <li class="list-item">Arizona State University <span class="indigo">*</span></li>
       <!--repeater-->
    </ul>
    <p><span class="indigo">*</span>Sponsors pledged $5,000+ in addition to charter support</p>
  </div>
</article>

<!--this is the old code for reference-->
  <div class="flex-grid">
  <?php if (have_rows('bio_grid') ) : while (have_rows ('bio_grid') ) : the_row(); 
    

      $bio_photo = get_sub_field('bio_photo');
      $name = get_sub_field('name');
      $position = get_sub_field('position');
      $affiliation = get_sub_field('affiliation');
      $degree = get_sub_field('degree');
      $bio = get_sub_field('bio');

    ?>

    <div class="bio-list-item">
      <a class="bio-list-item_short-bio-container">
        <img class="bio-list-item_image" src="<?php echo $bio_photo['url']; ?>" alt="<?php echo $bio_photo['alt'] ?>" /> 
        <p class="bio-list-item_info">
          <span class="bio-list-item_name">
            <?php echo $name; ?>
          </span>
            </br>
            <?php echo $affiliation; ?>
        </p>
      </a>
      <div class="bio-list-item_modal">
        <span class="close">X</span>
        <h2><?php echo $name; ?></h2> 
        <?php echo $bio; ?>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div> 
</article>


<?php get_footer(); ?>