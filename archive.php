<?php get_header(); ?>

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
