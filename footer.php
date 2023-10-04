<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xDevlabs
 */

?>

<footer id="footer" class="footer">
	<div class="container">
		<div class="footer__inner">
			<div class="footer__info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'xdevlabs' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'xdevlabs' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'xdevlabs' ), 'xdevlabs', '<a href="xdevlabs.com">xDevlabs.com</a>' );
				?>
			</div><!-- .site-info -->
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
