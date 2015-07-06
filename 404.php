<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div id="page-container">
	<div class="max-width">
		<div id="content-container">
			<div id="content">
				<div class="article">
					<div class="box-sizing">

						<h1><?php esc_html_e( 'The page cannot be found', 'hmcue' ); ?></h1>

						<div class="section">
							<p><?php _e( 'You can:', 'hmcue' ); ?></p>
							<ul>
								<li><?php
									printf( __( 'Return to the <a href="%s">home page</a> and look for links to the information;', 'hmcue' ),
										esc_url( home_url() )
									);
								?></li>
								<li><?php _e( 'Use the search functionality at the top of the page to search across the site; or', 'hmcue' ); ?></li>
								<li><?php _e( 'Double check the address.', 'hmcue' ); ?></li>
							</ul>
						</div><!-- .section -->

					</div><!-- .box-sizing -->
				</div><!-- .article -->
			</div><!-- #content -->
		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
