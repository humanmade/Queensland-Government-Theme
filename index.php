<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 */

get_header(); ?>

<div id="page-container"><div class="max-width">

		<div id="nav-section"><div class="box-sizing">
				<h2>Section heading</h2>
				<ul>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a><ul>
							<li><a href="index.html">Menu item</a></li>
							<li><a href="xhtml-video.html">Online video</a></li>
						</ul></li>
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
			</div></div>


		<div id="content-container">







			<div id="breadcrumbs">
				<h2>You are here:</h2>
				<ol>
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html">Menu item</a></li>
					<li><a href="index.html">Menu item</a></li>
					<li class="last-child">Heading 1</li>
				</ol>
			</div>
			<div id="content">

				<div class="article"><div class="box-sizing">

						<h1>CUE template</h1><div class="page-options" id="pre-page-options"><ul>


								<li><a href="http://www.qld.gov.au/share/">Share</a>

								</li>
								<li><a href="http://www.qld.gov.au/help/feeds/">Subscribe</a><ul>
										<li><a href="#">RSS feed</a></li>
										<li><a href="#">Atom feed</a></li>
										<li><a href="#">Email newsletter</a></li>
									</ul></li>
							</ul></div><div class="section" id="section-introduction">
							<p>Welcome to the CUE 3.0 template!</p>

							<p>Use the 'Themes' and 'Page models' items from the site navigation menu to preview different variants that are included with the CUE template.</p>
						</div><div class="section" id="section-documentation">
							<h2>Documentation</h2>
							<p>The following template documentation is also available:</p>
							<ul>
								<li><a href="../../docs/cue-template-change-log.doc" class="download"><span class="title">Template change log</span><span class="meta"> (DOC, 72 KB)</span></a></li>
								<li><a href="../../docs/cue-template-conformance-requirements.doc" class="download"><span class="title">Template conformance requirements</span><span class="meta"> (DOC, 95 KB)</span></a></li>
								<li>Implementation advice:<ul>
										<li><a href="../../docs/cue-how-to-customise-the-template.doc" class="download"><span class="title">How to customise the template</span><span class="meta"> (DOC, 90 KB)</span></a></li>
										<li><a href="../../docs/cue-template-reset-styles.doc" class="download"><span class="title">CUE template reset styles</span><span class="meta"> (DOC, 49 KB)</span></a></li>
									</ul></li>
							</ul>
						</div><div class="section" id="section-more-info">
							<h2>More information</h2>
							<p>More information is available on the <a href="http://ssq.govnet.qld.gov.au/web/">Queensland Government WebCentre</a>
								or by contacting the Smart Service Queensland <a href="onlineservices@smartservice.qld.gov.au">Online Services Unit</a>.</p>
						</div>

					</div></div>

			</div>

			<div class="aside"><div class="box-sizing">
					<h2>Supplementary content</h2>
					<p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
				</div></div>

			<div class="aside"><div class="box-sizing">
					<h2>Supplementary content</h2>
					<p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
				</div></div>


			<div id="document-properties"><div class="box-sizing">
					<dl>
						<dt>Last reviewed</dt>
						<dd>28 June 2010</dd>
						<dt>Last updated</dt>
						<dd>29 June 2010</dd>
					</dl>
				</div></div>


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
	</div></div>
<?php get_footer(); ?>