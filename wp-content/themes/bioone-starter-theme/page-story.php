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

  <p><?php the_field('paragraphs');?></p>
  <aside class="left">
    <?php the_field('first_aside');?>
  </aside>
  <p><?php the_field('more_paragraphs');?></p>
  <aside class="right">
    <?php the_field('second_aside');?>
  </aside>
  <p><?php the_field('last_paragraphs');?></p> 
  <hr>
</article> 

<article>
  <h1>Timeline</h1>
  <div class="timeline-flex">
    <div class="timeline-rule"></div>
    <div class="timeline-item-container">

    <?php if( have_rows( 'timeline' ) ) : while ( have_rows( 'timeline' ) ) : the_row(); 

      $year = get_sub_field('year');
      $event_name = get_sub_field('event_name');
      $event_description = get_sub_field('event_description');

    ?>
      <div class="timeline-item">
        <h3><?php echo $year; ?></h3>
        <h2><?php echo $event_name; ?></h2>
        <?php echo $event_description; ?>
      </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
  </div>
</article>

<article>
  <hr>
  <h1><?php ?></h1>
  <h2><?php ?></h2>
  <p><?php ?></p> 
  <h2>BioOne Founders</h2>
  <div id="story-founder-logos">

    <?php if( have_rows( 'founder_logos' ) ) : while ( have_rows( 'founder_logos' ) ) : the_row(); 

      $logo_link = get_sub_field('logo_link');
      $logo = get_sub_field('logo');

    ?>

    <a href="<?php echo $logo_link; ?>" target="_blank" />
        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" /> 
    </a>

    <?php endwhile; endif; wp_reset_postdata(); ?>
  
  </div>
  
  <h2>Charter Supporters</h2>
  <a class="btn-secondary-charter">Show list</a>
  <div id="charter-supporters-container">
    <ul>
      <li class="list-item">American Museum of Natural History</li>
      <li class="list-item">Arizona State University <span class="indigo">*</span></li>
      <li class="list-item">Auburn University <span class="indigo">*</span></li>  
      <li class="list-item">Baylor University <span class="indigo">*</span></li>  
      <li class="list-item">Boston College</li>
      <li class="list-item">Bowdoin College Library</li>
      <li class="list-item">Brandeis University</li>
      <li class="list-item">Brigham Young University</li>
      <li class="list-item">Brown University Library</li>
      <li class="list-item">California Digital Library <span class="indigo">*</span></li>
      <li class="list-item">Colorado State University</li>
      <li class="list-item">Claremont Colleges</li>
      <li class="list-item">Columbia University <span class="indigo">*</span></li>
      <li class="list-item">Cornell University</li>
      <li class="list-item">Creighton University</li>
      <li class="list-item">Dartmouth College <span class="indigo">*</span></li>
      <li class="list-item">Drexel University</li>
      <li class="list-item">Duke University</li>
      <li class="list-item">Eastern Michigan University</li>
      <li class="list-item">Eckerd College</li>
      <li class="list-item">Florida Atlantic University </li>
      <li class="list-item">Florida State University</li>
      <li class="list-item">Franklin and Marshall College</li>
      <li class="list-item">Georgetown University</li>
      <li class="list-item">Georgia Institute of Technology</li>
      <li class="list-item">Gettysburg College</li>
      <li class="list-item">Harvard University <span class="indigo">*</span> </li>
      <li class="list-item">Indiana University</li>
      <li class="list-item">Iowa State University <span class="indigo">*</span> </li>
      <li class="list-item">Johns Hopkins University</li>
      <li class="list-item">Kansas State University <span class="indigo">*</span> </li>
      <li class="list-item">Laval University <span class="indigo">*</span> </li>
      <li class="list-item">Linda Hall Library</li>
      <li class="list-item">Louisiana State University</li>
      <li class="list-item">Macalester College</li>
      <li class="list-item">Massachusetts Institute of Technology</li>
      <li class="list-item">McGill University</li>
      <li class="list-item">McMaster University</li>
      <li class="list-item">Michigan State University</li>
      <li class="list-item">Mississippi State University</li>
      <li class="list-item">Montana State University</li>
      <li class="list-item">North Carolina State University</li>
      <li class="list-item">Northeastern University</li>
      <li class="list-item">Oberlin College</li>
      <li class="list-item">Ohio State University</li>
      <li class="list-item">Ohio University</li>
      <li class="list-item">Oklahoma State University <span class="indigo">*</span> </li>
      <li class="list-item">Oregon State University</li>
      <li class="list-item">Pennsylvania State University</li>
      <li class="list-item">Rensselaer Polytechnic Institute</li>
      <li class="list-item">Rice University</li>
      <li class="list-item">Santa Clara University</li>
      <li class="list-item">Southern Illinois University</li>
      <li class="list-item">State University of New York at Albany</li>
      <li class="list-item">State University of New York</li>
      <li class="list-item">Stony Brook Syracuse University <span class="indigo">*</span> </li>
      <li class="list-item">Texas A&amp;M University, College Station <span class="indigo">*</span> </li>
      <li class="list-item">Texas Christian University</li>
      <li class="list-item">Texas Tech University <span class="indigo">*</span> </li>
      <li class="list-item">Tufts University</li>
      <li class="list-item">University of Alabama at Birmingham</li>
      <li class="list-item">University of Alberta</li>
      <li class="list-item">University of Arizona <span class="indigo">*</span></li>
      <li class="list-item">University of Arkansas</li>
      <li class="list-item">University of British Columbia</li>
      <li class="list-item">University of California-Berkeley</li>
      <li class="list-item">University of California-Davis</li>
      <li class="list-item">University of California-Irvine</li>
      <li class="list-item">University of California-Los Angeles</li>
      <li class="list-item">University of California-San Diego</li>
      <li class="list-item">University of California-Santa Barbara</li>
      <li class="list-item">University of Chicago</li>
      <li class="list-item">University of Cincinnati</li>
      <li class="list-item">University of Colorado at Boulder <span class="indigo">*</span> </li>
      <li class="list-item">University of Connecticut <span class="indigo">*</span> </li>
      <li class="list-item">University of Delaware</li>
      <li class="list-item">University of Florida</li>
      <li class="list-item">University of Georgia</li>
      <li class="list-item">University of Guelph</li>
      <li class="list-item">University of Houston</li>
      <li class="list-item">University of Illinois at Chicago</li>
      <li class="list-item">University of Illinois at Urbana-Champaign</li>
      <li class="list-item">University of Iowa</li>
      <li class="list-item">University of Kansas <span class="indigo">*</span> </li>
      <li class="list-item">University of Kentucky</li>
      <li class="list-item">University of Manitoba</li>
      <li class="list-item">University of Maryland at College Park</li>
      <li class="list-item">University of Massachusetts at Amherst</li>
      <li class="list-item">University of Miami</li>
      <li class="list-item">University of Michigan</li>
      <li class="list-item">University of Minnesota</li>
      <li class="list-item">University of Missouri-Columbia <span class="indigo">*</span> </li>
      <li class="list-item">University of Missouri-Kansas City</li>
      <li class="list-item">University of Nebraska-Lincoln <span class="indigo">*</span> </li>
      <li class="list-item">University of Nevada-Las Vegas</li>
      <li class="list-item">University of New Hampshire</li>
      <li class="list-item">University of New Mexico <span class="indigo">*</span> </li>
      <li class="list-item">University of North Carolina</li>
      <li class="list-item">University of Notre Dame</li>
      <li class="list-item">University of Oklahoma <span class="indigo">*</span> </li>
      <li class="list-item">University of Pittsburgh <span class="indigo">*</span> </li>
      <li class="list-item">University of Puget Sound</li>
      <li class="list-item">University of Richmond</li>
      <li class="list-item">University of Saskatchewan</li>
      <li class="list-item">University of Tennessee</li>
      <li class="list-item">University of Texas at Austin <span class="indigo">*</span> </li>
      <li class="list-item">University of Toronto</li>
      <li class="list-item">University of Utah <span class="indigo">*</span> </li>
      <li class="list-item">University of Washington</li>
      <li class="list-item">University of Waterloo</li>
      <li class="list-item">University of Western Ontario</li>
      <li class="list-item">University of Windsor</li>
      <li class="list-item">University of Wisconsin-Madison <span class="indigo">*</span> </li>
      <li class="list-item">University of Wisconsin-Milwaukee</li>
      <li class="list-item">Utah Academic Library Consortium</li>
      <li class="list-item">Utah State University</li>
      <li class="list-item">Vanderbilt University <span class="indigo">*</span> </li>
      <li class="list-item">Villanova University</li>
      <li class="list-item">Virginia Commonwealth University</li>
      <li class="list-item">Virginia Tech</li>
      <li class="list-item">Wabash College</li>
      <li class="list-item">Washington State University</li>
      <li class="list-item">Washington University, St. Louis</li>
      <li class="list-item">Wayne State University</li>
      <li class="list-item">Wesleyan University</li>
      <li class="list-item">Western Michigan University</li>
      <li class="list-item">York University</li>
    </ul>
    <p><span class="indigo">*</span>Sponsors pledged $5,000+ in addition to charter support</p>
  </div>
</article>

<?php get_footer(); ?>