<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup() {
	load_theme_textdomain('blankslate', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
	);
}
add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts() {
	wp_enqueue_script('jquery');
}
add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script() {
	if (get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
}
add_filter('the_title', 'blankslate_title');
function blankslate_title($title) {
	if ($title == '') {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter('wp_title', 'blankslate_filter_wp_title');
function blankslate_filter_wp_title($title) {
	return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init() {
	register_sidebar( array (
		'name' => __('Sidebar Widget Area', 'blankslate'),
	'id' => 'primary-widget-area',
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => "</li>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}
function blankslate_custom_pings($comment) {
	$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter('get_comments_number', 'blankslate_comments_number');
function blankslate_comments_number($count) {
	if (!is_admin()) {
	global $id;
	$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
	return count($comments_by_type['comment']);
} else {
	return $count;
}
}

//
//  CUSTOM POST TYPE DECLARATION
//    This goes in functions.php
//
add_action('init', 'create_conferences_post_type'); // Add our HTML5 Blank Custom Post Type
function create_conferences_post_type()
{
  register_taxonomy_for_object_type('category', 'conferences'); // Register Taxonomies for Category
  register_taxonomy_for_object_type('post_tag', 'conferences');
  register_post_type('conferences', // Register Custom Post Type
    array(
    'labels' => array(
      'name' => __('Conference Post', 'conferences_section'), // Rename these to suit
      'singular_name' => __('Conference Post Section', 'conferences_section'),
      'add_new' => __('Add New Conference Post', 'conferences_section'),
      'add_new_item' => __('Add New Conference Post', 'conferences_section'),
      'edit' => __('Edit', 'conferences_section'),
      'edit_item' => __('Edit Conference Post', 'conferences_section'),
      'new_item' => __('New Conference Post', 'conferences_section'),
      'view' => __('View Conference Post', 'conferences_section'),
      'view_item' => __('View Conference Post', 'conferences_section'),
      'search_items' => __('Search Conference Posts', 'conferences_section'),
      'not_found' => __('No conference posts found', 'conferences_section'),
      'not_found_in_trash' => __('No conference posts found in Trash', 'conferences_section')
    ),
    'public' => true,
    'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
    'has_archive' => true,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'excerpt',
      'revisions',
      'comments',
    ),
    'can_export' => true, // Allows export in Tools > Export
    'taxonomies' => array(
      'post_tag',
      'category'
    ) // Add Category and Post Tags support
  ));
  // flush_rewrite_rules();
}
//
//  END CUSTOM POST TYPE DECLARATION
//

//
//  CUSTOM POST TYPE DECLARATION
//    This goes in functions.php
//
add_action('init', 'create_news_post_type'); // Add our HTML5 Blank Custom Post Type
function create_news_post_type()
{
  register_taxonomy_for_object_type('category', 'news'); // Register Taxonomies for Category
  register_taxonomy_for_object_type('post_tag', 'news');
  register_post_type('news', // Register Custom Post Type
    array(
    'labels' => array(
      'name' => __('News Post', 'news_section'), // Rename these to suit
      'singular_name' => __('News Post Section', 'news_section'),
      'add_new' => __('Add News Post', 'news_section'),
      'add_new_item' => __('Add News Post', 'news_section'),
      'edit' => __('Edit', 'news_section'),
      'edit_item' => __('Edit Post', 'news_section'),
      'new_item' => __('New News Post', 'news_section'),
      'view' => __('View News Post', 'news_section'),
      'view_item' => __('View News Post', 'news_section'),
      'search_items' => __('Search News Posts', 'news_section'),
      'not_found' => __('No news posts found', 'news_section'),
      'not_found_in_trash' => __('No news posts found in Trash', 'news_section')
    ),
    'public' => true,
    'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
    'has_archive' => true,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'excerpt',
      'revisions',
      'comments',
    ),
    'can_export' => true, // Allows export in Tools > Export
    'taxonomies' => array(
      'post_tag',
      'category'
    ) // Add Category and Post Tags support
  ));
  // flush_rewrite_rules();
}
//
//  END CUSTOM POST TYPE DECLARATION
//
