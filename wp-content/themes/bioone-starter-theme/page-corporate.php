<?php 
/*
  Template Name: Corporate Documents Page 
*/
?> 

<?php get_header(); ?>

<div class="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
    <header><h1><?php the_title(); ?></h1></header>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
  <section>
    <h3>Annual Reports</h3><br />
    <div class="card-container">
      
      <?php if (have_rows('annual_reports_grid') ) : while (have_rows ('annual_reports_grid') ) : the_row(); 
      
        $link = get_sub_field('link');
        $year = get_sub_field('year');
        $report_bg = get_sub_field('report_bg');

      ?>

      <a class="card annual_report" style="background-image: url(<?php echo $report_bg['url']; ?>);" href="<?php echo $link;?>" target="_blank">
        <div class="outline">
        <br />
        <h3>Annual Report</h3>
        <h2><?php echo $year;?> in Review</h2>
        <p class="card-PDF">(PDF)</p>
        </div>
      </a>

    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

  </section>
  <hr>
  <section>
    <h3><a href="<?php echo get_field('bylaws_link');?>">BioOne Bylaws</a></h3>
  </section>
  <hr>
  <section>
    <h3>Audited Financial Statements &amp; 990s</h3>
    <ol>

      <?php if (have_rows('financials') ) : while (have_rows ('financials') ) : the_row(); 
      
        $year = get_sub_field('year');
        $fslink = get_sub_field('financial_statement_link');
        $nine_link = get_sub_field('990_link');

      ?>

      <ul>
        <li>
          <h4><?php echo $year;?></h4>
        </li>
        <li>
          <a href="<?php echo $fslink;?>" target="_blank">Financial Statements</a>
        </li>
        <li>
          <a href="<?php echo $nine_link;?>" target="_blank">Form 990</a>
        </li>
      </ul>
   
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </ol>
  </section>
</div>

<?php get_footer(); ?>