<?php get_header(); ?>

<div id="page-container">
	<div class="max-width">
		<div id="nav-section">
			<div class="box-sizing">

				<!-- @TODO child page menu? might be better left to widgets -->
				<h2>Section heading</h2>
				<ul>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a>
						<ul>
							<li><a href="index.html">Menu item</a></li>
							<li><a href="xhtml-video.html">Online video</a></li>
						</ul>
					</li>
					<li><a href="index.html">Menu item</a>
						<ul>
							<li><a href="#">Unordered list item 1</a>
								<ul>
									<li><a href="#">CUE template</a></li>
									<li><a href="#">Heading 1</a></li>
									<li><a href="#">Unordered list item 3</a></li>
									<li><a href="#">Unordered list item 4</a></li>
								</ul>
							</li>
							<li><a href="#">Unordered list item 3</a></li>
							<li><a href="#">Unordered list item 4</a></li>
						</ul>
					</li>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a></li>
				</ul>

				<?php if ( is_active_sidebar( 'single-primary' ) ) { ?>

					<div id="nav-section">
						<?php dynamic_sidebar( 'single-primary' ); ?>
					</div><!-- #nav-section -->

				<?php } ?>

			</div><!-- .box-sizing -->
		</div><!-- #nav-section -->

		<div id="content-container">

			<?php get_template_part( 'parts/breadcrumbs' ); ?>

			<?php get_template_part( 'parts/content', get_post_type() ); ?>

			<?php if ( is_active_sidebar( 'single-secondary' ) ) { ?>

				<div class="aside">
					<?php dynamic_sidebar( 'single-secondary' ); ?>
				</div>

			<?php } ?>

			<?php get_template_part( 'parts/properties' ); ?>

			<!-- @TODO comments -->
			<div id="page-feedback">
				<form action="" method="post">
					<h2>Rate this page</h2>
					<ol class="questions">
						<li class="select1"><fieldset>
								<strong>How useful was the information on this page?</strong>
								<ol class="options">
									<li><label for="rating-high"><input type="radio" name="rating" id="rating-high" value="high"/> Very useful</label></li>
									<li><label for="rating-medium"><input type="radio" name="rating" id="rating-medium" value="medium"/> Somewhat useful</label></li>
									<li><label for="rating-low"><input type="radio" name="rating" id="rating-low" value="low"/> Not very useful</label></li>
								</ol>
							</fieldset></li>
						<li class="textarea">
							<label>Other feedback</label>
							<textarea name="feedback" id="feedback" cols="50" rows="7"> </textarea>
						</li>
					</ol>
					<div class="actions">
						<input class="primary-action" type="submit" value="Submit feedback"/>
					</div>
				</form>
			</div>

		</div><!-- #content-container -->
	</div><!-- .max-width -->
</div><!-- #page-container -->

<?php get_footer(); ?>
