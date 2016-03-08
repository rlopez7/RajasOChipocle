<?php
/*
Template Name: Tendencias Utopia

get_header(); */?>
<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css"-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sections.css">
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/2a7c968f-f9fa-44a2-823a-a21e3b0a38d4.css"/>
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
		.centerText {
			/* Internet Explorer 10 */
			display:-ms-flexbox;
			-ms-flex-pack:center;
			-ms-flex-align:center;

			/* Firefox */
			display:-moz-box;
			-moz-box-pack:center;
			-moz-box-align:center;

			/* Safari, Opera, and Chrome */
			display:-webkit-box;
			-webkit-box-pack:center;
			-webkit-box-align:center;

			/* W3C */
			display:box;
			box-pack:center;
			box-align:center;
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
<body class="loading" style="height:100%!important;">
<header class="menu" align="center">
	<nav class="navbar navbar-fixed-top" role="navigation" style="height: 7vw; background-color: rgb(255, 255, 255);">
		<a href="#inicio" style="position:relative;float:left;">
			<img class="logo" border="0" src="<?php bloginfo('template_url'); ?>/img/logo.png" style="opacity: 1; height: 4vw; left: 10%; top: 3vh;">
		</a>

		<div align="center" style="width: 100%; height: 100%; padding-left: 50%;">
		<table align="center" style="height: 100%; width: 100%;">
			<tr style="vertical-align:middle;height:20%;">
				<td class="item">
					<a href="../#inicio" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;INICIO&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#soluciones" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;SOLUCIONES EN MDF&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#tendencias" style="text-decoration:none"><div class="menu_item_active">&nbsp;&nbsp;TENDENCIAS&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#nosotros" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;NOSOTROS&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#madera" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;NUESTRA MADERA&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#descargas" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;DESCARGAS&nbsp;&nbsp;</div></a>
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
		</div>
	</nav>
</header>
<main style="overflow:hidden;padding-top: 8.5%">
	<section id="slide1" >
		<div align="left" class="title_underline" style="font-size: 1.6vw;">TENDENCIAS<br/><b>_</b></div>
<div id="o-wrapper" class="o-wrapper" style="font-family: nexa; font-size: 1.5vw;color:white;line-height:1.2;height:17vh">
			<div style="display: table; width: 100%; height: 100%; overflow: hidden; font-family: nexa; color: white; font-size: 1.5vw; border-collapse: separate; table-layout: fixed;">
				<div id="utopiaSld" class="animSld expandSld selectedA" style="overflow: hidden; display: table-cell; background-color:#93bac0; vertical-align: middle;">
				<div>UTOPÍA</div>
				</div>
				<div id="nomadaSld" class="animSld collapseSld" style="overflow: hidden; display: table-cell; background-color:#004545; vertical-align: middle;">
				<div>NÓMADA</div>
				</div>
				<div id="alquimiaSld" class="animSld collapseSld" style="overflow: hidden; display: table-cell; background-color:#c19825; vertical-align: middle;">
				<div>ALQUIMIA</div>
				</div>
				<div id="virtualSld" class="animSld collapseSld" style="overflow: hidden; display: table-cell; background-color:#143463; vertical-align: middle;">
				<div>VIRTUAL</div>
				</div>
				<div id="mexicanoSld" class="animSld collapseSld" style="overflow: hidden; display: table-cell; background-color:#612768; vertical-align: middle;">
				<div>MEXICANO</div>
				</div>
			</div>
</div>
	</section>
	<section id="slide1" >
	<div style="display: table; width: 100%; height: 20vw; overflow: hidden; font-family: nexa; color: black; font-size:1.5vw; border-collapse: separate; table-layout: fixed; border-spacing: 10px;">
				<div style="overflow: hidden;display: table-cell;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/linio.png');background-repeat: no-repeat; background-size: 100% 100%;">
				<table height="100%" width="100%">
					<tr><td>&nbsp;</td></tr>
					<tr><td style="height: 100%; overflow: hidden;">

					</td></tr>
					<tr>
					<td>
					<div style="background-color: rgba(255, 255, 255, 0.8);">&nbsp;&nbsp;&nbsp;LINIO ANTOLOGÍA</div>
					</td></tr>
				</table>
				</div>
				<div style="overflow: hidden;display: table-cell;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/roble.png');background-repeat: no-repeat; background-size: 100% 100%;">
				<table height="100%" width="100%">
					<tr><td>&nbsp;</td></tr>
					<tr><td style="height:100%; overflow: hidden;">

					</td></tr>
					<tr>
					<td>
					<div style="background-color: rgba(255, 255, 255, 0.8);">&nbsp;&nbsp;&nbsp;ROBLE SÁMANO</div>
					</td></tr>
				</table>
				</div>
				<div style="overflow: hidden;display: table-cell;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/fresno.png');background-repeat: no-repeat;background-size: 100% 100%;">
				<table height="100%" width="100%">
					<tr><td>&nbsp;</td></tr>
					<tr><td style="height:100%; overflow: hidden;">

					</td></tr>
					<tr>
					<td>
					<div style="background-color: rgba(255, 255, 255, 0.8);">&nbsp;&nbsp;&nbsp;FRESNO INVIERNO</div>
					</td></tr>
				</table>
				</div>
			</div>
	</section>
	<section id="slide2" >
		<div style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/bgBase.png) no-repeat fixed center center / 100% 100%; height: 100%;">
			<table height="100%" width="100%">
				<tr>
					<td style="width:100%;font-family: nexa; font-size: 1.5vw;"
						data-start="opacity:0"
						data-center="opacity:1"
						data-anchor-target="#text">
					<div id="text" style="background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/slide2.png); background-repeat: no-repeat; background-position: left bottom; background-size: auto 100%; padding-top: 50px; padding-bottom: 50px; padding-left: 5%;">
						Distingue tu trabajo con nuestros </br>
						tableros de fibra de mediana densidad </br>
						desnudos. </br></br>
						Hechos de madera directa del tronco, </br>
						aportan características incomparables para la </br>
						industria del mueble al ser resistentes y </br>
						homogéneos.</br></br>
						UN SUEÑO IRREAL DE ESPACIOS</br>
						Reflejen paz, satisfacción, simpleza, perfección y </br>
						equilibrio, elementos que se consiguen con el uso de una </br>
						decoración fría, simple, longeva y una paleta que elude las </br>
						tonalidades brillantes y opta por maderas blancas, grises y </br>
						acentos tenues en colores pastel.
					</div>
					</td>
				</tr>
			</table>
		</div>
	</section>
	<section id="slide3">
		<div align="center">
		<table style="width: 80%; height: 100%; background-color: white; font-family: 'Silver Regular W00 Regular'; font-size: 8em; padding-top: 0px; margin-top: 5vh;color:#8e847b" rowpadding="0" rowspacing="0">
			<tr id="pura" style="border: 15px solid white;height:40vh">
				<td style="border: 15px solid white; height:20vh" width="30%" rowspan="2" align="right">pura&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td data-anchor-target="#pura"
				    data-bottom="@class:animateTstartA"
				    data-center="@class:animateTend" data-edge-strategy="set" width="30%" style="border: 15px solid white;background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/pura1.png) no-repeat center center / cover;">&nbsp;</td>
				<td data-anchor-target="#pura"
				    data-bottom="@class:animateTstartC"
				    data-center="@class:animateTend" data-edge-strategy="set" width="30%" style="border: 15px solid white;background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/pura2.png) no-repeat center center / cover;" rowspan="2">&nbsp;</td>
			</tr>
			<tr style="border: 15px solid white;height:40vh">
				<td data-anchor-target="#pura"
				    data-bottom="@class:animateTstartB"
				    data-center="@class:animateTend" data-edge-strategy="set" style="border: 15px solid white;height:20vh; background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/pura3.png) no-repeat center center / cover;">&nbsp;</td>
			</tr>
			<tr id="serena" style="border: 15px solid white;height:40vh">
				<td data-anchor-target="#serena"
				    data-bottom="@class:animateTstartA"
				    data-center="@class:animateTend" data-edge-strategy="set" style="border: 15px solid white;background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/serena.png) no-repeat center center / cover;" colspan="2">&nbsp;</td>
				<td align="right"style="border: 15px solid white;">serena</td>
			</tr>
			<tr style="border: 20px solid white;height:120vh">
				<td style="border: 15px solid white;">
					<table width="100%" height="100%">
						<tr height="34%">
							<td align="left">frágil
							</td>
						</tr>
						<tr data-anchor-target="#serena"
				    data-center="@class:animateTstartB"
				    data-top="@class:animateTend" data-edge-strategy="set" style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/paradojica.png) no-repeat center center / cover;" height="66%">
							<td id="fragil">&nbsp;
							</td>
						</tr>
					</table>

				</td>
				<td colspan="2" style="border: 15px solid white;">
					<table width="100%" height="100%"><tr height="66%">
							<td data-anchor-target="#serena"
				    data-center="@class:animateTstartA"
				    data-top="@class:animateTend" data-edge-strategy="set" style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/tendencias/fragil.png) no-repeat center center / cover;">&nbsp;
							</td>
						</tr>
						<tr height="34%">
							<td>&nbsp;&nbsp;paradójica
							</td>
						</tr>
					</table>
					
				</td>
			</tr>
		</table>
		</div>
	</section>
	<section id="spacer">
	<div style="height:150px">
	&nbsp;
	</div>
	</section>
</main>

<?php get_footer(); ?>