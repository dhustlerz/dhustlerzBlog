<div id="footer">
<?php if ( get_theme_mod( 'themefurnace_footer_logo' ) ) : ?>
<p class="copy"><img class="footerlogo" src='<?php echo esc_url( get_theme_mod( 'themefurnace_footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
<?php else : ?>
<?php endif; ?>
<?php do_action( 'themefurnace_credits' ); ?>
<?php echo get_theme_mod( 'themefurnacefooter_footer_text' ); ?><br />
<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'themefurnace' ), 'WordPress' ); ?></a> <?php printf( __( 'Theme: %1$s by %2$s.', 'themefurnace' ), 'Blogly', '<a href="http://themefurnace.com" rel="designer">ThemeFurnace</a>' ); ?> </p>
</div>
<!-- End Footer -->
</div>
<!-- End Main -->
</div>
<!-- End Container -->
<?php wp_footer(); ?>
</body></html>