<?php
/*
Template Name: Soluciones Decorativas

get_header(); */?>
<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css"-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sections.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slidemenu.css">
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.7.1.min.js"></script>
	<style type="text/css">
		@font-face {
		    font-family: nexa;
		    src: url("<?php bloginfo('template_url'); ?>/fonts/NexaLight.otf") format("opentype");
		}
		@font-face {
		    font-family: nexa;
		    src: url("<?php bloginfo('template_url'); ?>/fonts/NexaBold.otf") format("opentype");
		    font-weight: bold;
		}
		.back-link a {
			color: #4ca340;
			text-decoration: none;
			border-bottom: 1px #4ca340 solid;
		}
		.back-link a:hover,
		.back-link a:focus {
			color: #408536;
			text-decoration: none;
			border-bottom: 1px #408536 solid;
		}
		h1 {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
			margin: 0;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
			color: #1c1d1e;
			font-size: 32px;
			margin-bottom: 3px;
		}
		h2 {
			color: #1c1d1e;
			font-family: 'Open Sans', sans-serif;
			font-weight: normal;
		}
		.entry-header .inner {
			text-align: left;
			margin: 0 auto 20px auto;
			width: 800px;
		}
		.entry-header { padding-top: 20px; background-color: #fff; width:100%; position: fixed; top: 0; left: 0; z-index: 999999}
		.socialLinks {
			position: fixed;
			top: 20px;
			right: 20px;
			z-index: 1000000;
		}
		.fb-like,
		.twitter-follow-button,
		.twitter-share-button {margin-right: 10px;}
		#carbonads-container {
			position: fixed;
			bottom: 20px;
			right: 20px;
			z-index: 1000000;
		}
	</style>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Custom CSS -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<!--[endif]-->
</head>
<body class="loading" data-spy="scroll" data-target=".navbar" style="height:100%">
<header class="menu" align="center">
	<nav class="navbar navbar-fixed-top" role="navigation" style="height:100% height:20%; background-color:rgba(255, 255, 255, 255)">
		<table align="center" style="width:50%;height:100%">
			<tr style="vertical-align:center height:80%;">
				<td align="center" colspan="6">
					<a href="../#inicio">
						<img class="logo" border="0" src="<?php bloginfo('template_url'); ?>/img/logo.png" style="height:6.5vw">
					</a><br/>
				<td>
			</tr>
			<tr style="vertical-align:top height:20%;">
				<td class="item">
					<a href="../#inicio" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;INICIO&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#soluciones" style="text-decoration:none"><div class="menu_item_active">&nbsp;&nbsp;SOLUCIONES EN MDF&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#tendencias" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;TENDENCIAS&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#nosotros" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;NOSOTROS&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#madera" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;NUESTRA MADERA&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#descargas" style="text-decoration:none"><div class="menu_item" >&nbsp;&nbsp;DESCARGAS&nbsp;&nbsp;</div></a>
				</td><!--
				<td class="item">
					<a class="item_inicio" href="../#inicio"></a>
				</td>
				<td class="item">
					<a class="item_soluciones" href="../#soluciones"></a>
				</td>
				<td class="item">
					<a class="item_tendencias" href="../#tendencias"></a>
				</td>
				<td class="item">
					<a class="item_nosotros" href="../#nosotros"></a>
				</td>
				<td class="item">
					<a class="item_madera" href="../#madera"></a>
				</td>
				<td class="item">
					<a class="item_descargas" href="../#descargas"></a>
				</td>-->

			</tr>

		</table>
	</nav>
</header>
<main style="padding-top: 8.5%">
	<section id="slide1" class="homeSlide">
<div id="o-wrapper" class="o-wrapper" style="background-color:#9E2944; font-family: nexa; font-size: 3.5vw;color:white;line-height:1.2;height:17vh">
<table style="width:100%">
<tr>
<td style="padding-left:5%; width:50%">
			<div>SOLUCIONES</br><b>DECORATIVAS</b>
</td>
<td style="width:50%">
<button id="c-button--slide-right" class="c-button">Slide Right</button>
<nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
  <button class="c-menu__close">Close Menu &rarr;</button>
  <ul class="c-menu__items">
    <li class="c-menu__item"><a href="#" class="c-menu__link">Home</a></li>
    <li class="c-menu__item"><a href="#" class="c-menu__link">About</a></li>
    <li class="c-menu__item"><a href="#" class="c-menu__link">Services</a></li>
    <li class="c-menu__item"><a href="#" class="c-menu__link">Work</a></li>
    <li class="c-menu__item"><a href="#" class="c-menu__link">Contact</a></li>
  </ul>
</nav><!-- /c-menu slide-right -->
<div id="c-mask" class="c-mask" style="display:none;"></div><!-- /c-mask -->
</td>
</tr>
</table>
</div>

</div>

		<div class="bcg" style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-06.png) no-repeat center center /cover fixed; font-family: nexa; font-size: 5vh; color: white; line-height: 6vh; overflow: auto;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% 100px;" data-anchor-target="#slide1">

			<div style="font-family: nexa; font-size: 2.5vw; padding-left:5%;color:white;line-height:1.2;">
			</br>Haz realidad tus ideas usando nuestros </br>
			tableros recubiertos con diferentes diseños</br>
			decorativos. Nuestros diseños te acercan</br>
			a las últimas tendencias para que</br>
			desarrolles cualquier proyecto en menos</br>
			tiempo</br></br>
			<b>Marca la tendencia, pide TecnoTabla</b></br></div>
		</div>
	</section>
</main>
<script src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>
<script>
  var slideRight = new Menu({
    wrapper: '#o-wrapper',
    type: 'slide-right',
    menuOpenerClass: '.c-button',
    maskId: '#c-mask'
  });

  var slideRightBtn = document.querySelector('#c-button--slide-right');
  
  slideRightBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideRight.open();
  });

</script>

<?php get_footer(); ?>
