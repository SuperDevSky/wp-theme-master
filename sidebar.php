<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xDevlabs
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="sidebar" class="sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->
