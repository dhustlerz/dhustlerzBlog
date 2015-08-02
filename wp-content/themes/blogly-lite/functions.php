<?php

// themefurnace functions and definitions
if ( ! function_exists( 'themefurnace_setup' ) ) :
	function themefurnace_setup() {
	load_theme_textdomain( 'themefurnace', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
}
endif;
add_action( 'after_setup_theme', 'themefurnace_setup' );


//Enqueue scripts and styles
function themefurnace_scripts() {
	wp_enqueue_style( 'themefurnace-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery' );	
	wp_enqueue_script( 'themefurnace-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'themefurnace-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'themefurnace_scripts' );


// Style the Tag Cloud
function custom_tag_cloud_widget($args) {
	$args['largest'] = 12; //largest tag
	$args['smallest'] = 12; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['number'] = '8'; //number of tags
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_widget' );

/* This code filters the Categories archive widget to include the post count inside the link */
    add_filter('wp_list_categories', 'cat_count_span');
    function cat_count_span($links) {
    $links = str_replace('</a> (', ' (', $links);
    $links = str_replace(')', ')</a>', $links);
    return $links;
    }
    /* This code filters the Archive widget to include the post count inside the link */
    add_filter('get_archives_link', 'archive_count_span');
    function archive_count_span($links) {
    $links = str_replace('</a>&nbsp;(', ' (', $links);
    $links = str_replace(')', ')</a>', $links);
    return $links;
}

// Pagination

global $wp_query;

$total_pages = $wp_query->max_num_pages;

if ($total_pages > 1){

  $current_page = max(1, get_query_var('paged'));
  
  echo '<div class="page_nav">';
  
  echo paginate_links(array(
      'base' => get_pagenum_link(1) . '%_%',
      'format' => '/page/%#%',
      'current' => $current_page,
      'total' => $total_pages,
      'prev_text' => 'Prev',
      'next_text' => 'Next'
    ));

  echo '</div>';
  
}
  
// Load Extra Functions
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/themesetup.php';