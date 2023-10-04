<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package xDevlabs
 */

get_header();

?>

<main id="primary" class="site-main">
	<div class="container">
		<section class="error-404 not-found">
			<h1><?php esc_html_e( '404', 'xdevlabs' ); ?></h1>
			<h2><?php esc_html_e( 'OPPS! PAGE NOT FOUND', 'xdevlabs' ); ?></h2>
			<p>Sorry, the page you're looking for doesn't exits.</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php esc_html_e( 'Return home', 'xdevlabs' ); ?></a>
		</section><!-- .error-404 -->
	</div>
</main><!-- #main -->

<?php
get_footer();
