<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package themefurnace
 */
?>

<div id="sidebar">
<?php if ( get_theme_mod( 'themefurnace_logo' ) ) : ?>
<p><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo" src='<?php echo esc_url( get_theme_mod( 'themefurnace_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' /></a></p>
<p><span class="tagline">
<?php bloginfo( 'description' ); ?>
</span></p>
<?php else : ?>
<h2 class="sitetitle"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
<?php bloginfo( 'name' ); ?>
</a></h2>
<p><span class="tagline">
<?php bloginfo( 'description' ); ?>
</span></p>
<?php endif; ?>
<div class="sidebarwidget">
<h3 class="sidebartitle">
<?php _e( 'Menu', 'themefurnace' ); ?>
</h3>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</div>
<?php do_action( 'before_sidebar' ); ?>
<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
<div id="archives" class="sidebarwidget">
<h3 class="sidebartitle">
<?php _e( 'Archives', 'themefurnace' ); ?>
</h3>
<ul>
<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
</ul>
</div>
<div id="meta" class="sidebarwidget">
<h3 class="sidebartitle">
<?php _e( 'Meta', 'themefurnace' ); ?>
</h3>
<ul>
<?php wp_register(); ?>
<li>
<?php wp_loginout(); ?>
</li>
<?php wp_meta(); ?>
</ul>
</div>
<div id="search" class="sidebarwidget widget_search">
<h3 class="sidebartitle">Site Search</h3>
<?php get_search_form(); ?>
</div>
<?php endif; // end sidebar widget area ?>
</div>
<!-- End Sidebar -->
