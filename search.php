<?php
/**
 * The Search results page
 */

get_header(); ?>
	<div id="page-container">
		<div class="max-width">
			<div id="content-container">

				<?php get_template_part( 'parts/breadcrumbs' ); ?>

				<div id="content">

					<div class="article">
						<div class="box-sizing">

							<h1>Search results</h1>

							<div class="search-box-group" id="search-box-group-top">
								<?php get_search_form(); ?>
							</div>

							<?php if ( have_posts() ) : ?>

								<h2 class="resultset-title"><?php printf( __( 'Displaying search results', 'qldgovt' ) ); ?> <strong><?php qldgovt_the_starting_index(); ?> - <?php gldgovt_the_ending_index(); ?></strong> of <strong><?php echo absint( $wp_query->found_posts ); ?></strong> for <strong><?php printf( '%s', get_search_query() ); ?></strong></h2>
									<ul class="search-results">
							<?php endif; ?>
							<?php
								// Start the loop.
								while ( have_posts() ) : the_post(); ?>

									<?php
									/*
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'parts/content', 'search' );

									// End the loop.
								endwhile; ?>
								<div id="pagination">
									<ul>
										<li class="previous">Previous</li>
										<li>1</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=11">2</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=21">3</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=31">4</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=41">5</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=51">6</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=61">7</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=71">8</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=81">9</a>
										</li>
										<li>
											<a href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=91">10</a>
										</li>
										<li class="next"><a
												href="search.cgi?query=test&amp;num_ranks=10&amp;tiers=off&amp;collection=qld-gov&amp;profile=qld&amp;start_rank=11">Next</a>
										</li>
									</ul>
								</div>
								<?php if ( have_posts() ) : ?>
									</ul>
								<?php endif; ?>
							</div>
							<div class="search-box-group" id="search-box-group-top">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>

				</div>


				<div id="page-feedback">
					<form action="" method="post">
						<h2>Rate this page</h2>
						<ol class="questions">
							<li class="select1">
								<fieldset>
									<strong>How useful was the information on this page?</strong>
									<ol class="options">
										<li><label for="rating-high"><input type="radio" name="rating" id="rating-high"
										                                    value="high"/> Very useful</label></li>
										<li><label for="rating-medium"><input type="radio" name="rating"
										                                      id="rating-medium" value="medium"/>
												Somewhat useful</label></li>
										<li><label for="rating-low"><input type="radio" name="rating" id="rating-low"
										                                   value="low"/> Not very useful</label></li>
									</ol>
								</fieldset>
							</li>
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