<?php
/**
 * Our super wonderful Header
 */
$suffix = SCRIPT_DEBUG ? '' : '.min';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/assets/css/qg-ie<?php echo $suffix; ?>.css" type="text/css" media="all" /><![endif]-->
	<!--[if lt IE 9]><script type="text/javascript" src="<?php echo esc_url_raw( get_template_directory_uri() ); ?>/js/ie-layout<?php echo $suffix; ?>.js"></script><![endif]-->
	<?php wp_head(); ?>

</head>

<body id="qld-gov-au" <?php body_class(); ?>>

<!--[if lt IE 9]><script type="text/javascript">jQuery && jQuery.transformer({addClasses:true})</script><![endif]-->

<div id="access">
	<h2><?php __( 'Skip links and keyboard navigation', 'qldgovt' ); ?></h2>
	<ul>
		<li><a href="#content"><?php esc_html_e( 'Skip to content', 'qldgovt' ); ?></a></li>
		<li><a href="#nav-site"><?php esc_html_e( 'Skip to navigation', 'qldgovt' ); ?></a></li>
		<li><a href="#footer"><?php esc_html_e( 'Skip to footer', 'qldgovt' ); ?></a></li>
	</ul>
</div>

<div id="header">
	<div class="box-sizing">
		<div class="max-width">
			<h2><?php esc_html_e( 'Site header', 'qldgovt' ); ?></h2>


			<?php if ( get_header_image() ) : ?>
				<a class="qg-coa" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
			<?php endif; // End header image check. ?>

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

			<h2 id="site-name">
				<a href="/" accesskey="2">
					<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
				</a>
			</h2>
		</div>
	</div>
</div>

<div id="nav-site">
	<div class="max-width">
		<h2><?php esc_html_e( 'Site navigation', 'qldgovt' ); ?></h2>

		<?php
		wp_nav_menu(
			array(
				'theme_location'    => 'main',
				'menu_id'           => '',
				'fallback_cb'       => '',
			)
		);
		?>

	</div>
</div>
