<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/conditionizr.min.js"></script>
		<?php wp_head(); ?>
	</head>
	
	<body <?php
	global $post;
	$slug = get_post( $post )->post_name;
	body_class($slug);
	?>>
		
  <header class="page-header">
    <div class="page-header-container">
      <a href="<?php bloginfo('url'); ?>">
	      <picture>
	        <source 
	          media="(min-width: 741px)"
	          srcset="<?php bloginfo('template_url'); ?>/img/whitelogo_test.png">
	        <source  
	          media="(max-width: 740px)"
	          srcset="<?php bloginfo('template_url'); ?>/img/logo_test.png">
	        <img 
	          src="<?php bloginfo('template_url'); ?>/img/whitelogo_test.png"
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
  </header>
		
			</header> <!-- header#page-header -->