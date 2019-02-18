<?php 
/*
  Template Name: Contact Page 
*/
?> 

<?php get_header(); ?>

<div class="content">
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>

<section>
<p>To help our partners to display the BioOne logo consistently, we have setup a Content Delivery Network (CDN) so that the correct file is always in use. In order to ensure the most recent and up-to-date logo is being used, please do not download and alter the logo. To incorporate the BioOne logo into your site, please copy and paste the HTML tags exactly as they are presented below.</p>

<h2>BioOne Logo 141px</h2><br>
	<table class="mceItemTable" cellpadding="4"><tbody><tr><td id="" align="" valign="" lang="" dir="" style="width: 300px;" scope=""><img src="http://www.bioonepublishing.org/wp-content/uploads/2017/08/rgb_B1-Logo-color-text-141px.png" alt="BioOne Logo 141px" title="BioOne 141px"><br></td><td id="" align="" valign="middle" lang="" dir="" style="border: 1px solid #d6d6d6; width: 550px;" scope=""><code><span style="color: rgb(255, 0, 0);" mce_style="color: #ff0000;"><span style="background-color: rgb(254, 246, 245);" mce_style="background-color: #fef6f5;">&lt;img src="http://www.bioonepublishing.org/wp-content/uploads/2017/08/rgb_B1-Logo-color-text-141px.png" alt="BioOne Logo 141px” width="141" height="58” alt="BioOne"&gt;</span></span></code></td></tr></tbody></table>
  </section>
<h2>BioOne Logo 290px</h2><br>
  <section>
	<table class="mceItemTable" cellpadding="4"><tbody><tr><td id="" align="" valign="" lang="" dir="" style="width: 300px;" scope=""><img src="http://www.bioonepublishing.org/wp-content/uploads/2017/08/rgb_B1-Logo-color-text-290px.png" alt="BioOne Logo 290px" title="BioOne 290px"><br></td><td id="" align="" valign="middle" lang="" dir="" style="border: 1px solid #d6d6d6; width: 550px;" scope=""><code><span style="color: rgb(255, 0, 0);" mce_style="color: #ff0000;"><span style="background-color: rgb(254, 246, 245);" mce_style="background-color: #fef6f5;">&lt;img src="
http://www.bioonepublishing.org/wp-content/uploads/2017/08/rgb_B1-Logo-color-text-290px.png" width=“290” height=“124” alt="BioOne Logo 290px"&gt;</span></span></code></td></tr></tbody></table>
  </section> 
 <section>
      <?php the_field('promotional_text'); ?>
  </section>  
</div>

<?php get_footer(); ?>