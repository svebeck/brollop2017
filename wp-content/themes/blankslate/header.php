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
	<header id="header" role="banner">
		<div id="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Stefan / Camilla" rel="home">Stefan / Camilla</a>
		</div>

		<div id="site-title2">
			Stefan &amp; Camilla
		</div>
		<div id="site-description">
			ska gifta sig på Norrnäs, Värmdö 26 augusti
		</div>
		<nav id="menu" role="navigation">
			<a href="#ceremoni" >Ceremoni</a>
			<a href="#festinfo" >Festinfo</a>
			<a href="#boende" >Boende</a>
			<a href="#osa" >OSA</a>
		</nav>
	</header>
	<div id="container">