<?php get_header(); ?>

<div id="page-container">
	<div class="max-width">

		<?php if ( is_active_sidebar( 'home-primary' ) ) { ?>

			<div id="nav-section">
				<?php dynamic_sidebar( 'home-primary' ); ?>
			</div><!-- #nav-section -->

		<?php } ?>

		<div id="content-container">

			<?php get_template_part( 'breadcrumbs' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop', get_post_type() ); ?>

			<?php endwhile; ?>

			<?php if ( is_active_sidebar( 'home-secondary' ) ) { ?>

				<div class="aside">
					<?php dynamic_sidebar( 'home-secondary' ); ?>
				</div>

			<?php } ?>

		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
