<?php
/**
 * themefurnace Theme Customizer
 *
 * @package themefurnace
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themefurnace_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'themefurnace_customize_register' );


	
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function themefurnace_customize_preview_js() {
	wp_enqueue_script( 'themefurnace_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'themefurnace_customize_preview_js' );




function themefurnace_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themefurnacefooter', array(
        'title' => 'Footer', // The title of section
		'priority'    => 50,
        'description' => 'Footer Text', // The description of section
    ) );
 
  $wp_customize->add_setting( 'themefurnacefooter_footer_text', array(
    'default' => 'Hello world',
    // Let everything else default
) );
$wp_customize->add_control( 'themefurnacefooter_footer_text', array(
    // wptuts_welcome_text is a id of setting that this control handles
    'label' => 'Footer Text',
    // 'type' =>, // Default is "text", define the content type of setting rendering.
    'section' => 'themefurnacefooter', // id of section to which the setting belongs
    // Let everything else default
) );


$wp_customize->add_section( 'themefurnace_logo_section' , array(
    'title'       => __( 'Logo', 'themefurnace' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );


$wp_customize->add_setting( 'themefurnace_logo' );
$wp_customize->add_setting( 'themefurnace_footer_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themefurnace_logo', array(
    'label'    => __( 'Logo', 'themefurnace' ),
    'section'  => 'themefurnace_logo_section',
    'settings' => 'themefurnace_logo',
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_themefurnace_logo', array(
    'label'    => __( 'Footer Logo', 'themefurnace' ),
    'section'  => 'themefurnace_logo_section',
    'settings' => 'themefurnace_footer_logo',
) ) );


$wp_customize->add_section( 'themefurnace_colors', array(
        'title'          => __( 'Colors', 'themefurnace' ),
        'priority'       => 35,
        ) 
    );
    
$wp_customize->add_setting( 'link_color', array(
        'default'        => '#FF706C',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
        ) 
    );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link', array(
    'label'   => __( 'Link color', 'themefurnace' ),
    'section' => 'colors',
    'settings'   => 'link_color',
) ) );

 $wp_customize->add_setting( 'accent_color', array(
        'default'        => '#FF706C',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
        ) 
    );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent', array(
    'label'   => __( 'Accent color', 'themefurnace' ),
    'section' => 'colors',
    'settings'   => 'accent_color',
) ) );




}
add_action( 'customize_register', 'themefurnace_customizer', 11 );

function themefurnace_customizer_live_preview()
{
    wp_enqueue_script(
        'themefurnace-themecustomizer',			//Give the script an ID
        get_template_directory_uri().'/js/customizer.js',//Point to file
        array( 'jquery','customize-preview' ),	//Define dependencies
        '',						//Define a version (optional)
        true						//Put script in footer?
    );
}
add_action( 'customize_preview_init', 'themefurnace_customizer_live_preview' );