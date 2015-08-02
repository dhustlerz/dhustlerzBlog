<?php get_header(); ?>

<div id="main">
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>
<?php echo paginate_links(); ?>
<?php else : ?>
<?php get_template_part( 'no-results', 'index' ); ?>
<?php endif; ?>
<?php get_footer(); ?>
