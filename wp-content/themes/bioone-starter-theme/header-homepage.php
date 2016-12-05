<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    
    <script src="https://use.typekit.net/gmo5uyg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/conditionizr.min.js"></script>
		<?php wp_head(); ?>
	</head>
	
	<body <?php
	global $post;
	$slug = get_post( $post )->post_name;
	body_class($slug);
	?>>

  <?php 
      
    // You didn't need to put this in an array because get_field('homepage_random')
    // already returns an array. So you were created a multi-mulit-dimensional array. :)
    $homepage_bgArray = get_field('homepage_random');

    shuffle($homepage_bgArray);

    // I left this here so you can see what the array outputs.
    // Ultimately all you need to do is grab the code below on
    // line 36 and replace it in your background-image statement.
    echo $homepage_bgArray[0]['homepage_bg']['url'];
    echo '<pre>';
    print_r($homepage_bgArray);
    echo '</pre>';
  ?>

    <div class="page_header_homepage" style="background-image: url('<?php echo $homepage_bgArray[0]['homepage_bg'];?>');"></div>

    <div class="page-header-container">
      <a href="<?php bloginfo('url'); ?>">
	      <picture class="header-logo">
	        <source 
	          media="(min-width: 741px)"
	          srcset="<?php bloginfo('template_url'); ?>/img/logos/b1-logo_white.svg">
	        <source  
	          media="(max-width: 740px)"
	          srcset="<?php bloginfo('template_url'); ?>/img/logos/b1-logo.svg">
	        <img 
            class="header-logo"
	          src="<?php bloginfo('template_url'); ?>/img/logos/b1-logo_white.svg"
	          alt="BioOne Logo">
	      </picture>
      </a>
      
      <nav>
        <a class="handle">
          <span>Menu</span>
        </a>
        
        <?php 

          $defaults = array (
            'container' => false,
            'theme_location' => 'main-menu'
          );

          wp_nav_menu ($defaults); 

        ?>
      </nav>
    </div>
    <div class="hero-text-container">
      <div class="hero-header">BioOne is a nonprofit publisher committed to making scientific research more accessible
      </div>
      <div class="hero-subheader">We curate research content and support discourse while exploring new models in scientific publishing 
      </div>
    </div>
  </header>
		
			</header> <!-- header#page-header -->