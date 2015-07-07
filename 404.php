<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */

get_header(); ?>

<div id="page-container">
	<div class="max-width">
		<div id="content-container">
			<div id="content">
				<div class="article">
					<div class="box-sizing">

						<h1><?php esc_html_e( 'The page cannot be found', 'qldgovt' ); ?></h1>

						<div class="section">
							<p><?php esc_html_e( 'You can:', 'qldgovt' ); ?></p>
							<ul>
								<li><?php
									esc_html_e( 'Return to the ', 'qldgovt' );
									printf( '<a href="%s">home page</a>', esc_url( home_url() ) );
									esc_html_e( ' and look for links to the information;', 'qldgovt' );
								?></li>
								<li><?php esc_html_e( 'Use the search functionality at the top of the page to search across the site; or', 'qldgovt' ); ?></li>
								<li><?php esc_html_e( 'Double check the address.', 'qldgovt' ); ?></li>
							</ul>
						</div><!-- .section -->

					</div><!-- .box-sizing -->
				</div><!-- .article -->
			</div><!-- #content -->
		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
