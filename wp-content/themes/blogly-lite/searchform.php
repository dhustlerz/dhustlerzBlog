<?php
/**
 * The template for displaying search forms in themefurnace
 *
 * @package themefurnace
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<p>
<input type="text" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
</p>
<p>
<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'themefurnace' ); ?>" />
</p>
</form>
