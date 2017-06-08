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

		<section class="small-12 medium-6 columns hide-for-small-down">
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
				<a href="#ceremoni"><img src="<?php bloginfo('template_url'); ?>/images/down_arrow.png" /></a>
			</div>
		</section>
		<section id="splash" class="small-12 medium-6 columns">

			<nav id="menu-burger" role="navigation">
				<a class="menu-burger">
					<img class="menu-burger-icon" src="<?php echo get_template_directory_uri(); ?>/images/menu-burger.png" />
				</a>
			</nav>
			<nav id="menu" class="menu-block"role="navigation">
				<ul>
					<li><a href="#ceremoni" >Ceremoni</a></li>
					<li><a href="#festinfo" >Festinfo</a></li>
					<li><a href="#boende" >Boende</a></li>
					<li><a href="#footer" >OSA</a></li>
				</ul>
			</nav>
		</section>

		<section id="small-green-block" class="small-12 medium-6 columns show-for-small-only">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Stefan / Camilla" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/header_title.png" /></a>
			</div>
			<div id="site-description">
				ska gifta sig på Norrnäs, Värmdö 26 augusti
			</div>
			<div id="down-arrow">
				<a href="#ceremoni"><img src="<?php bloginfo('template_url'); ?>/images/down_arrow.png" /></a>
			</div>
		</section>
		<div id="date" class="small-12 columns hide-for-small-down">
			<img src="<?php bloginfo('template_url'); ?>/images/date.png" />
		</div>	
	</header>
	<div id="container" class="row">
		<div class="small-12 columns">