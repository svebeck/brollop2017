<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner" class="row collapse">	

		<section class="small-12 medium-6 columns">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Stefan / Camilla" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/header_title.png" /></a>
			</div>
			<div id="site-title2">
				Stefan &amp; Camilla
			</div>
			<div id="site-description">
				ska gifta sig på Norrnäs, Värmdö 26 augusti
			</div>
			<div id="down-arrow">
				<a href="#festinfo"><img src="<?php bloginfo('template_url'); ?>/images/down_arrow.png" /></a>
			</div>
		</section>
		<section id="splash" class="small-12 medium-6 columns">
			<nav id="menu" role="navigation">
				<a href="#ceremoni" >Ceremoni</a>
				<a href="#festinfo" >Festinfo</a>
				<a href="#boende" >Boende</a>
				<a href="#footer" >OSA</a>
			</nav>
		</section>
		<div id="date" class="small-12 columns">
			<img src="<?php bloginfo('template_url'); ?>/images/date.png" />
		</div>
	</header>
	<div id="container" class="row">
		<div class="small-12 columns">