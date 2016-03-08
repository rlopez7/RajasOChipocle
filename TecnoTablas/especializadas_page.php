<?php
/*
Template Name: Soluciones Especializadas

get_header(); */?>
<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css"-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sections.css">
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
	<nav class="navbar navbar-fixed-top" role="navigation" style="height: 5.2vw; background-color: rgb(255, 255, 255);">
		<a href="#inicio" style="position:relative;float:left;">
			<img class="logo" border="0" src="<?php bloginfo('template_url'); ?>/img/logo.png" style="opacity: 1; height: 5.2vw; left: 10px; top: 0px;">
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
					<a href="../#tendencias" style="text-decoration:none"><div class="menu_item">&nbsp;&nbsp;TENDENCIAS&nbsp;&nbsp;</div></a>
				</td>
				<td class="item">
					<a href="../#nosotros" style="text-decoration:none"><div class="menu_item_active">&nbsp;&nbsp;NOSOTROS&nbsp;&nbsp;</div></a>
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
	<section id="slide1" class="homeSlide homeSlideTall">
		<div align="left" class="title_underline" style="font-size: 3vw;">SOLUCIONES BÁSICAS<br/><b>_</b></div>
		<div class="bcg" style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-04.png) no-repeat center center / cover fixed; font-family: nexa; font-size: 5vh; color: white; line-height: 6vh; overflow: hidden;" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% 100px;" data-anchor-target="#slide1">
			<table height="100%" width="100%">
				<tr>
				<td style="padding-left: 5%; line-height: 1.2; color: black; font-family: nexa; font-size: 2vw; background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/slide.png); background-repeat: no-repeat; background-position: left center; opacity: 1; bottom: 0px; vertical-align: bottom; height: 94.5%; background-size: 70vw auto;"
						data-top="opacity:0"
						data-500-top-bottom="opacity:1" data-anchor-target="#slide1">
					<div id="text" >
						Distingue tu trabajo con nuestros tableros</br>de fibra de mediana densidad desnudos.</br></br>
						Hechos de madera directa del tronco,</br>aportan características incomparables</br>
						para la industria del mueble al ser</br> resistentes y homogéneos.</br></br></div>
				</div>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</table>

		</div>
	</section>
	<!--section id="plecaEstandar">
		<div><p class="centerText" style="height:100%;">ESTÁNDAR</p></div>
	</section-->
	<section id="slideEstandar" class="homeSlide">

		<table style="width:100%; height:100%;background-color:white;" rowpadding="0" rowspacing="0"     >
			<tr>
			<td style="font-family: nexa; font-size: 1.3vw; padding-left:5%;color:#8E847B;line-height:1.2;height:34%">
				</br></br><p style="font-size: 1.5vw;color:black" >ESTÁNDAR</p></br></br>
				TecnoTabla Estándar es un MDF desnudo fabricado con</br>
				la más alta tecnología, madera directa del tronco y </br>
				densidad de 680-750kg/m&sup3;</br></br>
				Es el tablero experto con múltiples características de </br>
				uso para proyectos que trascienden.
			</td>
			<td rowspan ="3" style="width: 50%; height:100%">
			<div style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/como.png) no-repeat fixed right center / auto 100%;position:relative;height:70%;width:70%;left:15%;" >
			</div></br>&nbsp;
			<table style="width:100%;height:20%; font-family: nexa; font-size: 1.5vw;color:#8E847B;">
					<tr class="tb1">
<td style="width:10%"></td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/download.png) no-repeat center center/ contain; width:25%; height:50%; position:relative;"  data-bottom="top:100px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/sample.png) no-repeat center center / contain;width:25%; height:50%; position:relative;" data-bottom="top:80px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/info.png) no-repeat center center / contain;width:25%; height:50%; position:relative;" data-bottom="top:60px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
<td style="width:10%"></td>
					</tr>
					<tr>
<td style="width:10%"></td>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:100px" data-center="top:0px" data-anchor-target="#slideEstandar .tb1">Descargar </br><b>ficha técnica</b></td>
						<td style="font-size:.7em; position:relative;;" align="center" data-bottom="top:80px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">Solicita </br><b>muestra</b></td>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:60px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">¿Cómo </br><b>lo hacemos?</b></td>
<td style="width:10%"></td>
					</tr>
				</table>

			</td>
			</tr>
			<tr>
			<td style="font-family: nexa; font-size: 1.5vw; padding-left:5%;color:#8E847B;line-height:1.2;;height:33%">
				<p style="color:black">CARACTERÍSTICAS</br>&nbsp;</p>
				<table style="width:80%;height:60%">
					<tr class="tb1">
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-52.png) no-repeat center center/ contain; width:25%; height:50%; position:relative;"  data-bottom="top:100px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-53.png) no-repeat center center / contain; width:25%; height:50%; position:relative;" data-bottom="top:80px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-54.png) no-repeat center center / contain; width:25%; height:50%; position:relative;" data-bottom="top:60px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-55.png) no-repeat center center / contain; width:25%; height:50%; position:relative;" data-bottom="top:40px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>

					</tr>
					<tr>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:100px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">Superficie </br><b>homogénea</b></td>
						<td style="font-size:.7em; position:relative;;" align="center" data-bottom="top:80px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">Resistente</td>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:60px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">Amable con </br><b>tus herramientas</b></td>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:40px" data-300-center="top:0px" data-anchor-target="#slideEstandar .tb1">Limpieza </br><b>de corte</b></td>

					</tr>
				</table>
			</td>
			</tr>
			<tr>
			<td style="font-family: nexa; font-size: 1.5vw; padding-left:5%;color:#8E847B;line-height:1.2;;height:33%">
				<p style="color:black">APLICACIONES</p></br>&nbsp;
				<ul>
				<li style="width: auto; float: left;">MOBILIARIO DE HOGAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;">ESTANTERÍA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;">MOLDURAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;"></li>
				<li style="width: auto; float: left;">MARCOS DE PUERTAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;">PUERTAS DE ARMARIOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;"></li>
				<li style="width: auto; float: left;">REVESTIMIENTO DE PAREDES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;"></li>
				</ul>
			</td>
			</tr>
	        </table>
	</section>
	<!--section id="plecaLigero">
	<div style="background-color: #2D4F4C; background:url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/pleca.png) no-repeat #2D4F4C right 15vh / auto 35vw;  background-attachment: fixed; font-family: nexa; font-size: 5vh; color:white; height: 20vh;" align="center"><p style="height:100%;">LIGERO</p></div>
	</section-->
	<section id="slideLigero" class="homeSlide">
		<table style="width:100%; height:100%;" rowpadding="0" rowspacing="0">
			<tr>
			<td rowspan ="3" style="width: 50%;">

				<div style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/como.png) no-repeat fixed left center / auto 100%;position:relative;height:70%;width:70%;left:15%;" >

			</div></br>&nbsp;
				<table style="width:100%;height:20%;font-family: nexa; font-size: 1.5vw;color:#8E847B;">
					<tr class="tb1">
<td style="width:10%"></td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/download.png) no-repeat center center/ contain; width:25%; height:50%; position:relative;"  data-bottom="top:100px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/sample.png) no-repeat center center / contain;width:25%; height:50%; position:relative;" data-bottom="top:80px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/info.png) no-repeat center center / contain;width:25%; height:50%; position:relative;" data-bottom="top:60px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">
						</td>
<td style="width:10%"></td>
					</tr>
					<tr>
<td style="width:10%"></td>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:100px" data-center="top:0px" data-anchor-target="#slideEstandar .tb1">Descargar </br><b>ficha técnica</b></td>
						<td style="font-size:.7em; position:relative;;" align="center" data-bottom="top:80px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">Solicita </br><b>muestra</b></td>
						<td style="font-size:.7em; position:relative;" align="center" data-bottom="top:60px" data--100-center="top:0px" data-anchor-target="#slideEstandar .tb1">¿Cómo </br><b>lo hacemos?</b></td>
<td style="width:10%"></td>
					</tr>
				</table>

			</td>
			<td style="font-family: nexa; font-size: 1.3vw; padding-left:5%;color:#8E847B;line-height:1.2;height:34%">
				</br></br><p style="font-size: 1.5vw;color:black">LIGERO</p></br></br>
				TecnoTabla Ligero es un tablero de MDF con densidad entre 590-640 </br>
				kg/m&sup3;, la solución perfecta cuando son necesarios tableros muy</br>
				ligeros y manejables. Ideal para espacios en dónde la resistencia</br>
				mecánica no es el elemento más importante.</br>
			</td>
			</tr>
			<tr>
			<td style="font-family: nexa; font-size: 1.5vw; padding-left:5%;color:#8E847B;line-height:1.2;;height:33%">
				<p style="color:black">CARACTERÍSTICAS</br>&nbsp;</p>
				<table style="width:80%;height:60%">
					<tr class="tb2">
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-52.png) no-repeat center center/ contain; width:25%; height:50%; position:relative;"  data-bottom="top:40px" data-300-center="top:0px" data-anchor-target="#slideLigero .tb2">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-54.png) no-repeat center center/ contain; width:25%; height:50%; position:relative;"  data-bottom="top:60px" data-300-center="top:0px" data-anchor-target="#slideLigero .tb2">
						</td>
						<td style="background: transparent url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas/element-61.png) no-repeat center center/ contain; width:25%; height:50%; position:relative;"  data-bottom="top:80px" data-300-center="top:0px" data-anchor-target="#slideLigero .tb2">
						</td>
						<td style="background: transparent width:25%; height:50%; position:relative;"  data-bottom="top:80px" data--100-center="top:0px" data-anchor-target="#slideLigero .tb2">
						</td>
					</tr>
					<tr>
						<td style="font-size:.7em; position:relative;"  data-bottom="top:40px" data-300-center="top:0px" data-anchor-target="#slideLigero .tb2" align="center">Superficie </br><b>homogénea</b></td>
						<td style="font-size:.7em; position:relative;"  data-bottom="top:60px" data-300-center="top:0px" data-anchor-target="#slideLigero .tb2" align="center">Amable con </br><b>tus herramientas</b></td>
						<td style="font-size:.7em; position:relative;"  data-bottom="top:80px" data-300-center="top:0px" data-anchor-target="#slideLigero .tb2" align="center">Ligero</b></td>
					</tr>
				</table>
			</td>
			</tr>
			<tr>
			<td style="font-family: nexa; font-size: 1.5vw; padding-left:5%;color:#8E847B;line-height:1.2;;height:33%">
				<p style="color:black">APLICACIONES</p></br>&nbsp;
				<ul>
				<li style="width: auto; float: left;">MONTAJE DE EXPOSICIONES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;">MAMPARAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;"></li>
				<li style="width: auto; float: left;">SEPARACIONES INTERNAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;">TECHOS FALSOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li style="width: auto; float: left;"></li>
				</ul>
			</td>
			</tr>
	        </table>
	</section>
</main>

<?php get_footer(); ?>