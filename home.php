<?php
/**
 * Our template for the blog loop
 */
get_header(); ?>

<div id="page-container">
	<div class="max-width">

		<?php if ( is_active_sidebar( 'home-primary' ) ) { ?>

			<div id="nav-section">
				<?php dynamic_sidebar( 'home-primary' ); ?>
			</div><!-- #nav-section -->

		<?php } ?>

		<div id="content-container">

			<?php get_template_part( 'parts/breadcrumbs' ); ?>

			<div id="content">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/loop', get_post_type() ); ?>

				<?php endwhile; ?>

			</div><!-- #content -->

			<?php if ( is_active_sidebar( 'home-secondary' ) ) { ?>

				<div class="aside">
					<?php dynamic_sidebar( 'home-secondary' ); ?>
				</div>

			<?php } ?>

		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
