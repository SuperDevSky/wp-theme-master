<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xDevlabs
 */

get_header();
?>
<div class="main-sidebar">
	<div class="container">
		<div class="main-sidebar__inner">
			<main id="primary" class="site-main">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				endwhile;
				?>
			</main><!-- #main -->

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
