<?php get_header(); ?>

<div id="page-container">
	<div class="max-width">
		<div id="nav-section">
			<div class="box-sizing">

				<!-- @TODO left sidebar widgets -->

			</div><!-- .box-sizing -->
		</div><!-- #nav-section -->

		<div id="content-container">

			<?php get_template_part( 'breadcrumbs' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop', get_post_type() ); ?>

			<?php endwhile; ?>

			<!-- @TODO right hand sidebar widgets -->
			<div class="aside">
				<div class="box-sizing">
					<h2>Supplementary content</h2>
					<p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
				</div>
			</div>

		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
