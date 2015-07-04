<?php
/**
 * The search results content
 */
?>
<li>
	<h3>
		<a href="<?php echo esc_url( the_permalink() ); ?>">
			<?php the_title( '<span class="result-title">', '</span>' ); ?>
		</a>
	</h3>

	<p class="search-description"><?php echo get_the_excerpt(); ?></p>

	<p class="meta"><?php echo esc_url( the_permalink() ); ?>  - <?php qldgovt_the_page_size(); ?> - <?php the_modified_date(); ?></p>
</li>
