<?php
// Theme Specific Settings

// Content Width
	if ( ! isset( $content_width ) )
	$content_width = 990; /* pixels */
	
	
	
function load_theme_specific() {
// Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-full');
    add_image_size( 'post-page', 990, 525, true );
    add_image_size( 'post-thumb', 684, 250, true );
// Post formats
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	// Add nav menu
register_nav_menu( 'primary', 'Primary Menu' );
}
add_action('after_setup_theme', 'load_theme_specific');


 // Widgetized Areas
    function themefurnace_widgets_init() {
    register_sidebar( array(
    'name'          => __( 'Sidebar', 'themefurnace' ),
    'id'            => 'sidebar-1',
    'before_widget' => '
<div class="sidebarwidget">',
  'after_widget'  => '</div>
',
    'before_title'  => '
<h3 class="sidebartitle">',
  'after_title'   => '</h3>
',
    ) );
    }
    add_action( 'widgets_init', 'themefurnace_widgets_init' );
    
    
    // Custom Backgrounds
    function themefurnace_register_custom_background() {
    $args = array(
    'default-color' => '#FF706C',
    'default-image' => '',
    );
    
    $args = apply_filters( 'themefurnace_custom_background_args', $args );
    add_theme_support( 'custom-background', $args );
    if ( ! empty( $args['default-image'] ) )
    define( 'BACKGROUND_IMAGE', $args['default-image'] );
    }
    
    add_action( 'after_setup_theme', 'themefurnace_register_custom_background' );
    
    
    function themefurnace_load_theme_fonts() {
    $heading = get_theme_mod('google_fonts_heading_font');
    $body = get_theme_mod('google_fonts_body_font');
    if((!empty($heading) && $heading != 'none') || (!empty($body) && $body != 'none')) {
    echo '
<style type="text/css">
';
        $imports = array();
        $styles = array();
        if(!empty($heading) && $heading != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family='.urlencode($heading).');';
            $styles[] = 'h1, h2, h3, h4, h5, h6 { font-family: "'.$heading.'" !important }';
        }
        if(!empty($body) && $body != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family='.urlencode($body).');';
            $styles[] = 'body { font-family: "'.$body.'" !important }';
        }

        echo implode("\r\n", $imports);
        echo implode("\r\n", $styles);
        echo '
</style>
';
    
    }
    }
    
    // load colors
    function themefurnace_load_theme_colors() {
    $backgroundColor = get_theme_mod('background_color', '#FF706C');
    $linkColor = get_theme_mod('link_color', '#FF706C');
    $accentColor = get_theme_mod('accent_color', '#FF706C');
    
    echo '
<style type="text/css">
';

    if(!empty($backgroundColor)) {
        $hash = '';
        if(strpos($backgroundColor, '#') === false) {
            $hash = '#';
        }
        echo 'body { background-color: '.$hash.$backgroundColor.'}';
    }

    if(!empty($linkColor)) {
        $hash = '';
        if(strpos($linkColor, '#') === false) {
            $hash = '#';
        }
        echo ' a { color: '.$hash.$linkColor.'}';
    }
	
	   if(!empty($accentColor)) {
        $hash = '';
        if(strpos($accentColor, '#') === false) {
            $hash = '#';
        }
        echo '.postmeta i { color: '.$hash.$accentColor.'}';
		echo '.sidebarwidget li a:hover, .tagcloud a  { background-color: '.$hash.$accentColor.'}';
    }

    echo '
</style>
';
    
    
    $body = get_theme_mod('google_fonts_body_font');
    if(!empty($heading) && $heading != 'none' && !empty($body) && $body != 'none') {
    echo '
<style type="text/css">
';
        $imports = array();
        $styles = array();
        if(!empty($heading) && $heading != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family='.urlencode($heading).');';
            $styles[] = 'h1, h2, h3, h4, h5, h6 { font-family: "'.$heading.'" !important }';
        }
        if(!empty($body) && $body != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family='.urlencode($body).');';
            $styles[] = 'body { font-family: "'.$body.'" !important }';
        }

        echo implode("\r\n", $imports);
        echo implode("\r\n", $styles);
        echo '
</style>
';
    
    }
    }