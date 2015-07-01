<?php

get_header();
the_post();

?>

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

				<!-- @TODO left sidebar widgets -->

			</div><!-- .box-sizing -->
		</div><!-- #nav-section -->

		<!-- @TODO breadcrumbs -->
		<div id="content-container">
			<div id="breadcrumbs">

				<h2>You are here:</h2>
				<ol>
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a></li>
					<li class="last-child"><?php the_title(); ?></li>
				</ol>

			</div><!-- #breadcrumbs -->

			<div id="content">
				<div class="article">
					<div class="box-sizing">

						<h1><?php the_title(); ?></h1>

						<div class="page-options" id="pre-page-options">
							<ul>
								<li><a href="#"><?php esc_html_e( 'Share' ,'hmcue' ); ?></a></li>
								<li><a href="<?php echo esc_url( get_post_comments_feed_link() ); ?>"><?php esc_html_e( 'Subscribe' ,'hmcue' ); ?></a>
									<ul>
										<li><a href="<?php echo esc_url( get_post_comments_feed_link() ); ?>"><?php esc_html_e( 'RSS feed', 'hmcue' ); ?></a></li>
										<li><a href="<?php echo esc_url( get_post_comments_feed_link( null, 'atom' ) ); ?>"><?php esc_html_e( 'Atom feed', 'hmcue' ); ?></a></li>
										<!--<li><a href="#">Email newsletter</a></li>-->
									</ul>
								</li>
							</ul>
						</div><!-- .page-options -->
						<div class="section">
							<?php the_content(); ?>
						</div><!-- .section -->

					</div><!-- .box-sizing -->
				</div><!-- .article -->
			</div><!-- #content -->

			<!-- @TODO right hand sidebar widgets -->
			<div class="aside">
				<div class="box-sizing">
					<h2>Supplementary content</h2>
					<p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
				</div>
			</div>

			<div id="document-properties">
				<div class="box-sizing">
					<dl>
						<dt><?php esc_html_e( 'Last updated', 'hmcue' ); ?></dt>
						<dd><?php the_modified_date(); ?></dd>
					</dl>
				</div>
			</div><!-- #document-properties -->

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

		</div>
	</div>
</div>

<?php get_footer(); ?>
