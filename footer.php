<?php
/**
 * The template for displaying the footer
 */
?>
<div id="footer">
	<div id="fat-footer">
		<div class="max-width">
			<div class="box-sizing">
				<h2>Explore this site</h2>
				<?php get_template_part( 'parts/footer-widgets' ); ?>
			</div>
		</div>
	</div>

	<div class="max-width"><div class="box-sizing">
			<h2>Site footer</h2>
			<?php wp_nav_menu( array(
				'theme_location' => 'footer',
			) ); ?>
			<p class="legal">© The State of Queensland (agency name) 2010–2013</p>
			<p><a href="http://www.qld.gov.au/" accesskey="1">Queensland Government</a></p>
			<div id="qg-branding"><p><img class="tagline" src="theme/qg-tagline-footer.png" alt="Great state. Great opportunity."/></p></div>
		</div></div>
</div>
<?php wp_footer(); ?>
</body>
</html>
