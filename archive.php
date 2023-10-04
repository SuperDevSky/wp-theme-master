<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xDevlabs
 */

get_header();

get_template_part( 'template-parts/page', 'title' );
?>
<div class="main-sidebar">
	<div class="container">
		<div class="main-sidebar__inner">
			<main id="primary" class="site-main">
				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'list' );

					endwhile;

					get_template_part( 'template-parts/pagination' );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</main><!-- #main -->
			
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
