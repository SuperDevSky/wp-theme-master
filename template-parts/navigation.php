<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage xDevlabs
 * @since 1.0.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>

	<nav class="pagination-single section-inner<?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'xdevlabs' ); ?>" role="navigation">

		<div class="pagination-single__inner">

			<div class="pagination-single__prev">
				<?php if ( $prev_post ) { ?>
					<h3><?php esc_html_e( 'Bài viết trước', 'xdevlabs' ); ?></h3>
					<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
						<?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?>
					</a>
					<time><?php echo get_the_date(get_option( 'date_format' ), $prev_post->ID); ?></time>
				<?php } ?>
			</div>

			<div class="pagination-single__next">
				<?php if ( $next_post ) { ?>
					<h3><?php esc_html_e( 'Bài viết tiếp theo', 'xdevlabs' ); ?></h3>
					<a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
						<?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?>
					</a>
					<time><?php echo get_the_date(get_option( 'date_format' ), $next_post->ID); ?></time>
				<?php } ?>
			</div>

		</div><!-- .pagination-single-inner -->

	</nav><!-- .pagination-single -->

	<?php
}
