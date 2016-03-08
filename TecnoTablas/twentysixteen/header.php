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
		    src: url("http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/fonts/NexaLight.otf") format("opentype");
		}
		@font-face {
		    font-family: nexa;
		    src: url("http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/fonts/NexaBold.otf") format("opentype");
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
		.vertical-text {
			transform: rotate(-90deg);
			transform-origin: center center 0;
		}
		.vertical-text1 {
			transform: rotate(90deg);
			transform-origin: center center 0;
		}
		.straight-text {
			transform: rotate(0deg);
			transform-origin: center center 0;
		}
		.anios{
			left:0px;
			width:30%;
			font-size:4.5em;
			color:#FFFFFF;
		}
		.svgImg{
			margin-right: 20px;
			float:left;
			width:6.5em;
			vertical-align:top;
			top:0;left:0; z-index:2;position:relative;
		}


		.leftAlign {
			font-size:2em;
			width:auto !important;
			text-align:left;
			color:#FFFFFF !important;
		}
		.svgText2000{
			text-align:center;
			top:0px; bottom:0;left:35px; right:0; z-index:1;position:absolute;
		}
		.svgText2010{
			text-align:left;
			 top:250px; bottom:0;left:195px; right:0; z-index:1;position:absolute;
		}

		.svgText2014{
		text-align:left;
			 top:500px; bottom:0;left:355px; right:0; z-index:1;position:absolute;
		}
		.svgText2015{
		text-align:left;
			 top:750px; bottom:0;left:515px; right:0;  z-index:1;position:absolute;
		}
		.svgText2016{
		text-align:left;
			 top:1000px; bottom:0;left:675px; right:0;  z-index:1; position:absolute;
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
	<![endif]-->
</head>
<body class="loading" data-spy="scroll" data-target=".navbar" >
<header class="menu" align="center">
	<nav class="navbar navbar-fixed-top" role="navigation" style="height: 7vw; background-color: rgb(255, 255, 255); top: -100%;" data-50-top-bottom="top:0;opacity:1" data-start="top:-100%;opacity:0"  data-anchor-target="#inicio">
		<a href="#inicio" style="position:relative;float:left;">
			<img class="logo" border="0" src="<?php bloginfo('template_url'); ?>/img/logo.png" style="opacity: 1; height: 4vw; left: 10%; top: 3vh;">
		</a>

		<div align="center" style="width: 100%; height: 100%; padding-left: 50%;">
		<table align="center" style="height: 100%; width: 100%;">
			<tr style="vertical-align:middle;height:20%;">
				<td class="item">
					<a href="#inicio" style="text-decoration:none"><div class="menu_item_active">&nbsp;&nbsp;INICIO&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="#soluciones" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;SOLUCIONES EN MDF&nbsp;&nbsp;</div></a>
				</td>
				<!--<td class="item">
					<a href="#tendencias" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;TENDENCIAS&nbsp;&nbsp;</div></a>
				</td>-->
				<td class="item">
					<a href="#nosotros" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;NOSOTROS&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="#madera" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;NUESTRA MADERA&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="#descargas" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;DESCARGAS&nbsp;&nbsp;</div></a>
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