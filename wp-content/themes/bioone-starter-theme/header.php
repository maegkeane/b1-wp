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
      <a href="index.html">
      <picture>
        <source 
          media="(min-width: 741px)"
          srcset="images/whitelogo.png">
        <source  
          media="(max-width: 740px)"
          srcset="images/logo.png">
        <img 
          src="images/whitelogo.png" 
          alt="BioOne Logo">
      </picture>
      </a>
      
      <nav>
        <a class="handle">
          <span>Menu</span>
        </a>
        <ul>
          <li class="has-children">
            <a href="#">Who We Are</a>
            <ul class="children" >
              <li>
                <a href="team.html">Team</a>
              </li>
              <li>
                <a href="board.html">Board</a>
              </li>
              <li>
                <a href="corporate-docs.html">Corporate Documents</a>
              </li>
            </ul> 
          </li>
          <li>
            <a href="story.html">Our Story</a>
          </li>   
          <li class="has-children">
            <a href="#">Our Work</a>
            <ul class="children">
              <li>
                <a href="publications.html">Publications</a>
              </li>
              <li>
                <a href="initiatives.html">Initiatives &amp; Resources</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="news-events.html">News &amp; Events</a>
          </li>
          <li class="has-children">
            <a href="#">Contact</a>
            <ul class="children" id="nav-align-left">
              <li>
                <a href="hello.html">Say Hello</a>
              </li>
              <li>
                <a href="press.html">For The Press</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>
		
			</header> <!-- header#page-header -->