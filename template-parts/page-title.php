<section class="page-title">
	<div class="container">
		<div class="page-title__inner">
			<?php 
			if ( is_archive() ) {
				the_archive_title( '<h1>', '</h1>' );
			}
			elseif ( is_singular() ) {
				the_title( '<h1>', '</h1>' );
			}
			elseif ( is_404() ) {
				echo '<h1>' . esc_html__( 'Not found.', 'xdevlabs' ) . '</h1>';
			}
			elseif ( is_search() ) {
				printf( '<h1>' . esc_html__( 'Search Results for: %s', 'xdevlabs' ), '<span>' . get_search_query() . '</span>' . '</h1>' );
			}
			else {
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			} ?>
		</div>
	</div>
</section>
