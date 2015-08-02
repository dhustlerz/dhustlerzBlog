<?php

/**

 * The template used for displaying page content in page.php

 *

 * @package themefurnace

 */

?>

<div id="post-<?php the_ID(); ?>" class="post">
<h1 class="entry-title">
<?php the_title(); ?>
</h1>
<div class="entry-content">
<?php the_content(); ?>
<?php

			wp_link_pages( array(

				'before' => '<div class="page-links">' . __( 'Pages:', 'themefurnace' ),

				'after'  => '</div>',

			) );

		?>
</div>
<!-- .entry-content -->
<?php edit_post_link( __( 'Edit', 'themefurnace' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</div>
<!-- .post -->
