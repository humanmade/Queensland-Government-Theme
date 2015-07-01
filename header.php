<?php
/**
 * Our super wonderful Header
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-AU" lang="en-AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<link rel="stylesheet" type="text/css" href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/qg.css" media="all"/>
	<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/qg-ie.css" type="text/css" media="all" /><![endif]-->

	<link href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/layout-small.css" media="all" rel="stylesheet" type="text/css"/>
	<link href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/layout-medium.css" media="only all and (min-width: 43em) and (max-width: 65em)" rel="stylesheet" type="text/css"/>
	<link href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/layout-large.css" media="only all and (min-width: 65em)" rel="stylesheet" type="text/css"/>

	<link rel="shortcut icon" href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/images/favicon.ico"/>


	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
	<script type="text/javascript" src="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/js/ie-layout.js"></script>
	<![endif]-->
</head>

<body id="qld-gov-au">

<!--[if lt IE 9]><script type="text/javascript">jQuery && jQuery.transformer({addClasses:true})</script><![endif]-->
<div id="access">
	<h2>Skip links and keyboard navigation</h2>
	<ul>
		<li><a href="#content">Skip to content</a></li>
		<li><a href="#nav-site">Skip to navigation</a></li>
		<li><a href="#footer">Skip to footer</a></li>
		<li><a href="http://www.qld.gov.au/help/accessibility/keyboard.html#section-aria-keyboard-navigation">Use tab and cursor keys to move around the page (more information)</a></li>
	</ul>
</div>

<div id="header"><div class="box-sizing"><div class="max-width">
			<h2>Site header</h2>

			<a id="qg-coa" href="http://www.qld.gov.au/">
				<!--[if gte IE 7]><!--><img src="theme/qg-coa.png" width="287" height="50" alt="Queensland Government"/><!--<![endif]-->
				<!--[if lte IE 6]><img src="theme/qg-coa-ie6.png" width="287" height="50" alt="Queensland Government" /><![endif]-->
				<img src="cue/images/qg-coa-print.png" class="print-version" alt=""/>
			</a>

			<ul id="tools">
				<li><a accesskey="3" href="http://www.qld.gov.au/#sitemap">Site map</a></li>
				<li><a accesskey="4" href="http://www.qld.gov.au/contact/">Contact us</a></li>
				<li><a href="http://www.qld.gov.au/help/">Help</a></li>
				<li class="last-child">
					<form action="http://pan.search.qld.gov.au/search/search.cgi" id="search-form">
						<div class="search-wrapper">
							<label for="search-query">Search Queensland Government</label>
							<input accesskey="5" type="text" name="query" id="search-query" size="27" value=""/>
							<input type="submit" class="submit" value="Search"/>
							<input type="hidden" name="num_ranks" value="10"/>
							<input type="hidden" name="tiers" value="off"/>
							<input type="hidden" name="collection" value="qld-gov"/>
							<input type="hidden" name="profile" value="qld"/>
						</div>
					</form>
				</li>
			</ul>

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
