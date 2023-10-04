<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xDevlabs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php xdevlabs_post_thumbnail(); ?>

	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	if ( 'post' === get_post_type() ) :
		get_template_part( 'template-parts/entry', 'meta' );
	endif; ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<a href="<?php esc_url( get_permalink() ); ?>" class="btn"><?php echo esc_html__( 'Readmore', 'xdevlabs' ); ?></a>
</article><!-- #post-<?php the_ID(); ?> -->
