<?php
/**
 * Our super wonderful Header
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-AU" lang="en-AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<!--[if lt IE 8]>
	<link rel="stylesheet" href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/qg-ie.css" type="text/css" media="all" />
	<![endif]-->

	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/js/ie-layout.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body id="qld-gov-au">

<!--[if lt IE 9]><script type="text/javascript">jQuery && jQuery.transformer({addClasses:true})</script><![endif]-->

<div id="access">
	<h2><?php __( 'Skip links and keyboard navigation', 'qldgovt' ); ?></h2>
	<ul>
		<li><a href="#content"><?php __( 'Skip to content', 'qldgovt' ); ?></a></li>
		<li><a href="#nav-site"><?php __( 'Skip to navigation', 'qldgovt' ); ?></a></li>
		<li><a href="#footer"><?php __( 'Skip to footer', 'qldgovt' ); ?></a></li>
	</ul>
</div>

<div id="header"><div class="box-sizing"><div class="max-width">
			<h2>Site header</h2>

			<a id="qg-coa" href="http://www.qld.gov.au/">
				<!--[if gte IE 7]><!--><img src="theme/qg-coa.png" width="287" height="50" alt="Queensland Government"/><!--<![endif]-->
				<!--[if lte IE 6]><img src="theme/qg-coa-ie6.png" width="287" height="50" alt="Queensland Government" /><![endif]-->
				<img src="cue/images/qg-coa-print.png" class="print-version" alt=""/>
			</a>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'header',
					'menu_id'         => 'tools',
					'fallback_cb'     => '',
					'items_wrap'      => '<ul id="tools">%3$s<li class="last-child"></li></li>' .  qldgovt_header_searchform() . '</ul>',
				)
			);
			?>

			<h2 id="site-name"><a href="/" accesskey="2">
					<!--[if gte IE 7]><!--><img src="theme/site-name.png" height="28" alt="Site name"/><!--<![endif]-->
					<!--[if lte IE 6]><img src="theme/site-name-ie6.png" height="28" alt="Site name" /><![endif]-->
					<img src="theme/site-name-print.png" height="28" class="print-version" alt=""/>
				</a></h2>

		</div></div></div>


<div id="nav-site"><div class="max-width">
		<h2>Site navigation</h2>
		<ul>
			<li><a href="index.html">Home</a>
				<ul>
					<li><a href="#">Unordered list</a></li>
					<li><a href="#">Unordered list item 2</a></li>
					<li><a href="#">Unordered </a></li>
					<li><a href="#">Unordered list item 4</a></li>
				</ul>
			</li>
			<li><a href="index.html">Menu item 2</a>
				<ul>
					<li><a href="#">Unordered list item 2.1.1</a></li>
					<li><a href="#">Unordered list </a></li>
				</ul>
			</li>
			<li><a href="index.html">Menu item 3</a>
				<ul>
					<li><a href="#">Unordered</a></li>
					<li><a href="#">Unordered list item 2.2</a></li>
				</ul>
			</li>
			<li><a href="index.html">Menu item 4</a></li>
			<li><a href="index.html">Themes</a>
				<ul>
					<li><a href="../template/xhtml-3column.html">Bare</a></li>
					<li><a href="../greyscale/xhtml-3column.html">Greyscale</a></li>
					<li><a href="../bluesteel/xhtml-3column.html">Blue Steel</a></li>
					<li><a href="../supergreen/xhtml-3column.html">Supergreen</a></li>
				</ul>
			</li>
			<li><a href="index.html">Page models</a>
				<ul>
					<li><a href="xhtml-1column.html">1 column</a></li>
					<li><a href="xhtml-2column.html">2 column</a></li>
					<li><a href="xhtml-3column.html">3 column</a></li>
					<li><a href="xhtml-text.html">Text content</a></li>
					<li><a href="xhtml-accessibility.html">Accessibility statement</a></li>
					<li><a href="xhtml-applications.html">Applications</a></li>
					<li><a href="xhtml-search-results.html">Search results</a></li>
					<li><a href="xhtml-video.html">Video</a></li>
				</ul>
			</li>
		</ul>
	</div></div>
