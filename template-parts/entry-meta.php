<div class="entry-meta">
	<div class="entry-meta__time"><i class="fas fa-calendar-alt"></i> <?php xdevlabs_posted_on(); ?></div>
	<div class="entry-meta__categories">
		<i class="fas fa-tags"></i>
		<?php $categories_list = get_the_category_list( esc_html__( ', ', 'xdevlabs' ) );
		if ( $categories_list ) {
			printf( '<span class="cat-links">' . esc_html__( '%1$s', 'xdevlabs' ) . '</span>', $categories_list );
		} ?>
	</div>
</div>