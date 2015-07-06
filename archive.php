<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div id="page-container">
	<div class="max-width">

		<?php if ( is_active_sidebar( 'archive-primary' ) ) { ?>

			<div id="nav-section">
				<?php dynamic_sidebar( 'archive-primary' ); ?>
			</div><!-- #nav-section -->

		<?php } ?>

		<div id="content-container">

			<?php get_template_part( 'parts/breadcrumbs' ); ?>

			<div id="content">

				<div class="article">
					<div class="box-sizing">

						<?php the_archive_title( '<h1>', '</h1>' ); ?>

					</div><!-- .box-sizing -->
				</div><!-- .article -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/loop', get_post_type() ); ?>

				<?php endwhile; ?>

			</div><!-- #content -->

			<?php if ( is_active_sidebar( 'archive-secondary' ) ) { ?>

				<div class="aside">
					<?php dynamic_sidebar( 'archive-secondary' ); ?>
				</div>

			<?php } ?>

		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
