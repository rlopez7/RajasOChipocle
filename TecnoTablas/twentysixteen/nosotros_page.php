<?php
/*
Template Name: Nosotros

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
<main style="padding-top: 8.5%">
	<section id="intro" class="" style="min-width:50px;height:150vh">
		<div align="left" class="title_underline" style="font-size: 1.5vw;">NOSOTROS<br/><b>_</b></div>
		<div class="bcg">
			<div style="height:100%;background: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/madera.png) no-repeat fixed center center/ 100% 100%">
			<table height="100%" width="100%">
				<tr>
					<td style="width:60%">&nbsp;</td>
					<td style="width:40%;font-family: nexa; font-size: 1.5vw;"
						data-bottom="background-color: rgba(255, 255, 255, 0); border-left:solid 4px rgba(255, 255, 255, 0)"
						data-center-bottom="background-color: rgba(255, 255, 255, 0.8); border-left:solid 4px rgba(255, 255, 255, 1); opacity:1"
						data-center="background-color: rgba(255, 255, 255, 0.8); border-left:solid 4px rgba(255, 255, 255, 1); opacity:1"
						data-center-top="background-color: rgba(255, 255, 255, 0.8); border-left:solid 4px rgba(255, 255, 255, 1); opacity:1"
						data--500-top="background-color: rgba(255, 255, 255, 0); border-left:solid 4px rgba(255, 255, 255, 0); opacity:0" data-start="opacity:0" data-anchor-target="#text">		
					<div style="height:20vh">&nbsp;</div>
					<div align="center" style="width:100%;height:10%">Primera empresa mexicana en fabricar </br>tableros especializados de alta calidad.</div>
					<div align="center" style="width:100%;height:10%">&nbsp;</div>
					<div id="text" align="center" style="width:100%;height:10%">Con materia prima 100 % sustentable, </br>proveniente de nuestras plantaciones </br>forestales renovables, tecnología de punta y </br>un enfoque en innovación de productos. </div>
					<div align="center" style="width:100%;height:10%">&nbsp;</br>&nbsp;</div>
					<div align="center" style="font-size: 2vw;width:100%;height:10%">HACEMOS PROYECTOS </br><p style="font-size: 4.8vw;">REALIDAD</p></div>
					<div align="center" style="width:100%;height:10%">&nbsp;</div>
					</td>
				</tr>
			</table>
			</div>
		</div>
	</section>
	<section id="adn" style="height:78vh">

		<div class="bcg" style="background-color:white" data-anchor-target="#adn" align="center">
<div align="left" class="title_underline" style="width:100vw;font-size: 1.5vw;">&nbsp;<br/><br/><br/>NUESTRO ADN<br/><b>_</b></div>
			<div class="hsContainer">
			
			<div style="display: table; width: 100%; height: 80%; overflow: hidden; font-family: nexa; color: black; font-size: 2vw; border-collapse: separate; table-layout: fixed; border-spacing: 10px;">
				<div id="porqueBtn" class="animBtn" style="overflow: hidden;display: table-cell;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/por_que.png');background-repeat: no-repeat; background-size: cover;">

				<table height="100%" width="100%">
					<tr style="height:60%"><td>&nbsp;</td></tr>
					<tr><td style="height: 100%; overflow: hidden;">
						<div id="accesory" style="white-space: nowrap; height:150%;font-family: nexa; text-decoration: none; color: black; text-align: left; background-color: rgba(255, 255, 255, 0.5); font-size: 1.2vw; padding-top:5%; padding-left: 3%;">
							NUESTRA RAZÓN DE EXISTIR</br>Existimos para crear soluciones</br>de buena madera al alcance de todos.
						</div>
					</td></tr>
					<tr>
					<td>
					<div style="background-color: rgba(255, 255, 255, 0.5);">&nbsp;&nbsp;&nbsp;POR QUÉ</div>
					</td></tr>
				</table>
				</div>
				<div id="comoBtn" class="animBtn" style="overflow: hidden;display: table-cell;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/que.png');background-repeat: no-repeat; background-size: cover;">
				<table height="100%" width="100%">
					<tr style="height:60%"><td>&nbsp;</td></tr>
					<tr><td style="height:100%; overflow: hidden;">
						<div id="accesory" style="white-space: nowrap; height:150%;font-family: nexa; text-decoration: none; color: black; text-align: left; background-color: rgba(255, 255, 255, 0.5); font-size: 1.2vw; padding-top: 5%; padding-left: 3%;">
							Plantamos árboles donde no hay para fabricar madera directa del tronco y crear tableros especializados.
						</div>
					</td></tr>
					<tr>
					<td style="background-color: rgba(255, 255, 255, 0.5);">
					<div>&nbsp;&nbsp;&nbsp;CÓMO LO HACEMOS</div>
					</td></tr>
				</table>
				</div>
				<div id="queBtn" class="animBtn" style="overflow: hidden;display: table-cell;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/como.png');background-repeat: no-repeat; background-size: cover;">
				<table height="100%" width="100%">
					<tr style="height:60%"><td>&nbsp;</td></tr>
					<tr><td style="height:100%; overflow: hidden;">
						<div id="accesory" style="white-space: nowrap; height:150%;font-family: nexa; text-decoration: none; color: black; text-align: left; background-color: rgba(255, 255, 255, 0.5); font-size: 1.2vw; padding-top: 5%; padding-left: 3%;">
							Creamos tableros especializados de buena madera para hacer</br>tus proyectos realidad
						</div>
					</td></tr>
					<tr>
					<td>
					<div style="background-color: rgba(255, 255, 255, 0.5);">&nbsp;&nbsp;&nbsp;QUÉ VENDEMOS</div>
					</td></tr>
				</table>
				</div>
			</div>
		</div>
	</section>
	<section id="timeline" class="homeSlide homeSlideTall">
<div align="left" class="title_underline" style="font-size: 1.5vw;">HISTORIA<br/><b>_</b></div>
		<div class="bcg" style="height:93%;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/bg_historia.png')" data-anchor-target="#timeline"><div>&nbsp;</div>
			<div style="position:relative" data-anchor-target="#timeline">


						<div class="skrollr-body"  style="text-align:left !important;">

							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="1400px" height="1200px" data-anchor-target="#timeline" z-index="2" style="position:absolute;" >
								<polyline
								style="fill:none;stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0;align:left"
								data-center-top="stroke-dashoffset:6000;" data-0-center-bottom="stroke-dashoffset:2000;"
								points="560,0 560,150    350,150 350,430      1150,430 1150,700      670,700 670,921     1370,921 1370,1190"/>

							</svg>

						</div>
							<div style="font-family: nexa; font-size: .8em;" class="svgText2000"><p class="leftAlign"> <img class="svgImg" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/historia2000.png"  alt=""/>Nace Proteak, hoy somos<br>la empresa Forestal m&aacute;s<br>grande de M&eacute;xico</p></div>
							<div style="font-family: nexa; font-size: .8em;" class="svgText2010"><p class="leftAlign"> <img class="svgImg" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/historia2010.png"  alt=""/>Crecemos constantemente: cotizamos<br>en la BMV, tenemos presencia<br>internacional y exportamos madera a <br> m&aacute;s de 15 puertos en el mundo</p></div>
							<div style="font-family: nexa; font-size: .8em;" class="svgText2014"><p class="leftAlign"> <img class="svgImg" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/historia2014.png"  alt=""/>Arrancamos la contrucci&oacute;n de la primera<br>planta productora de MDF con tecnolog&iacute;a de <br>punta en M&eacute;xico ubicada en Tabasco con una<br>inversi&oacute;n de 220 MDD</p></div>
							<div style="font-family: nexa; font-size: .8em;" class="svgText2015"><p class="leftAlign"> <img class="svgImg" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/historia2015.png"  alt=""/>Firmamos un acuerdo de participaci&oacute;n<br>con FINSA&reg; mayor productor de MDF<br>en iberoam&eacute;rica y especialista en<br>tableros de valor agregado</p></div>
							<div style="font-family: nexa; font-size: .8em;" class="svgText2016"><p class="leftAlign"> <img class="svgImg" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/historia2016.png"  alt=""/>Proteak crea TecnoTabla la primer<br>empresa mexicana de tableros de fibra<br>de mediana densidad (MDF)<br>especializados y de buena madera que<br>hacen tus proyectos realidad</p></div>


				</div>
			</div>
		</div>
	</section>
	<section id="propuesta" class="homeSlide" style="height:120%">
		<div align="left" class="title_underline" style="font-size: 1.5vw;">PROPUESTA DE VALOR<br/><b>_</b></div>
		<div class="bcg" align="center" data-anchor-target="#propuesta">
			<div align="center">
				<div align="center" style="position:relative;width=80%;font-family: nexa; font-size: 1.3vw; line-height: 1.2;color: white; height:5%;">
					&nbsp;
				</div>
				<table style="font-family: nexa; font-size: 1.3vw;height:90vh" width="80%" height="80%">
					<tr style="border-bottom: 5px solid white;height:50%; vertical-align: top;">
						<td width="50%" style="border-right: 5px solid white;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/propuesta1.png');background-repeat: no-repeat; background-size: cover;">
							<table id="move" width="100%" height="100%" align="center">
								<tr height="20%" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: middle;">
								<td style="padding-left: 10%;">ALTA CALIDAD</td></tr>

								<tr ><td style="overflow:hidden;vertical-align:top">
								<div id="mmv" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: top;overflow:hidden;" align="center">
								&nbsp;</br>Tableros que provienen del tronco, no de desperdicios</br>
								La mejor y más avanzada tecnología de fabricación alemana</br>
								Control del suminsitro de materia prima de nuestras plantaciones que garantiza la calidad</br>
								Proyecto industrial integrado del arbol al tablero</br></br>&nbsp;
								<div>
								</td></tr>
							</table>
						</td>
						<td width="50%"style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/propuesta2.png');background-repeat: no-repeat; background-size: cover;">
							<table id="move" width="100%" height="100%" align="center">
								<tr height="20%" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: middle;">
								<td style="padding-left: 10%;">DESARROLLAMOS MÉXICO</br> Y NUESTRO ENTORNO</td></tr>
								<tr ><td style="overflow:hidden;vertical-align:top">
								<div id="mmv" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: top;overflow:hidden;" align="center">
								&nbsp;</br>Bosques sustentables certificados FSC&reg;</li>
								Creación de empleos</br>
								Industria limpia, generamos nuestra propia energía</br>
								Promovemos el espíritu emprendedor</br>
								Empresa 100% Mexicana</br></br>&nbsp;
								<div>
								</td></tr>
							</table>
						</td>
					</tr>
					<tr style="height:50%; vertical-align: top;">
						<td width="50%" style="border-right: 5px solid white;background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/propuesta3.png');background-repeat: no-repeat; background-size: cover;">
							<table id="move" width="100%" height="100%" align="center">
								<tr height="20%" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: middle;">
								<td style="padding-left: 10%;">SOLUCIONES DIFERENCIADAS</br>Y DE VALOR AGREGADO</td></tr>

								<tr ><td style="overflow:hidden;vertical-align:top">
								<div id="mmv" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: top;overflow:hidden;" align="center">
								&nbsp;</br>Diferentes soluciones para cada necesidad</br>
								Tableros especializados que se adecuan a los usos frecuentes del MDF</br>
								Últimas tendencias de diseño</br>
								Tableros sustentables y certificados internacionalmente</br></br>&nbsp;
								<div>
								</td></tr>
							</table>
						</td>
						<td width="50%" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/propuesta4.png');background-repeat: no-repeat; background-size: cover;">
							<table id="move" width="100%" height="100%" align="center">
								<tr height="20%" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: middle;">
								<td style="padding-left: 10%;">EXPERIENCIA DE COMPRA ÚNICA</td></tr>

								<tr ><td style="overflow:hidden;vertical-align:top">
								<div id="mmv" style="background-color: rgba(255, 255, 255, 0.8); vertical-align: top;overflow:hidden;" align="center">
								&nbsp;</br>Orientación al cliente</br>
								Entrenamiento y capacitación especializada en MDF</br>
								Personal técnicamente capacitado y especializado</br>
								Entregas Puntuales</br></br>&nbsp;
								<div>
								</td></tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</section>
	<div style="height:50px">&nbsp;</div>
	<section id="comoHacemos" class="" style="height:120%">
		<div align="left" class="title_underline" style="font-size: 1.5vw;">¿CÓMO LO HACEMOS?<br/><b>_</b></div>
		<div id="cd-timeline">
			<div class="cd-timeline-block">
				<div id="cd-timeline-first" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-first"
					data-start="@class:cd-timeline-img is-hidden"
					data-300-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">1</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-first"
					data-start="@class:cd-timeline-content is-hidden"
					data-300-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">PLANTAR<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/plantar.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-second" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-first"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">2</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-first"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">CORTAR<td><td style="width:30px;"></tr>
						<tr><td colspan="3" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/cortado.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-third" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-second"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">3</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-second"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">RECOLECTAR TRONCOS<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/recoleccion.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-fourth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-third"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">4</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-third"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">TRITURAR<td><td style="width:30px;"></tr>
						<tr><td colspan="3" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/triturado.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-fifth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-fourth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">5</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-fourth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">DESFIBRAR<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/desfibrado.png');background-repeat: no-repeat; background-size: contain;background-position:left center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-sixth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-fifth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">6</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-fifth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">FORMACIÓN<td><td style="width:30px;"></tr>
						<tr><td colspan="4" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/formacion.png');background-repeat: no-repeat; background-size: contain;background-position:right center">&nbsp;<td></tr>
					</table>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-seventh" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-sixth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">7</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-sixth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">PREPRENSA<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/preprensa.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-eighth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-seventh"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">8</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-seventh"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">PRENSA CALIENTE<td><td style="width:30px;"></tr>
						<tr><td colspan="4" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/prensa.png');background-repeat: no-repeat; background-size: contain;background-position:right center">&nbsp;<td></tr>
					</table>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-nineth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-eighth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">9</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-eighth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">DIMENSIONADO<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/dimensionado.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-tenth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-nineth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">10</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-nineth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">ENFRIADO<td><td style="width:30px;"></tr>
						<tr><td colspan="3" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/enfriado.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->

			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block" style="margin-top: 10%;">
				<div id="cd-timeline-textone" class="cd-timeline-img is-hidden cd-timeline-alt"
					data-anchor-target="#cd-timeline-tenth"
					data-start="@class:cd-timeline-img cd-timeline-alt is-hidden"
					data-center="@class:cd-timeline-img cd-timeline-alt bounce-in" data-emit-events style="border-radius: 0%; background-color:#3D5B58; color: white; box-shadow: unset; width: 26%;">
					<div align="center" class="cd-timeline-inner" style="width:inherit;font-size:1.4vw" align="center">EL MDF DESNUDO ESTÁ LISTO</div>
				</div> <!-- cd-timeline-img -->
				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-tenth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			<div class="cd-timeline-block">
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-eleventh" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-textone"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">11</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-textone"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">LIJADO<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/lijado.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block" style="margin-top: 10%;">
				<div id="cd-timeline-texttwo" class="cd-timeline-img is-hidden cd-timeline-alt"
					data-anchor-target="#cd-timeline-eleventh"
					data-start="@class:cd-timeline-img cd-timeline-alt is-hidden"
					data-center="@class:cd-timeline-img cd-timeline-alt bounce-in" data-emit-events style="border-radius: 0%; background-color:#3D5B58; color: white; box-shadow: unset; width: 26%;">
					<div align="center" class="cd-timeline-inner" style="width:inherit;font-size:1.4vw" align="center">MELAMINA</div>
				</div> <!-- cd-timeline-img -->
				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-eleventh"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			<div class="cd-timeline-block">
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-twelveth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-texttwo"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">12</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-texttwo"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">PAPEL<td><td style="width:30px;"></tr>
						<tr><td colspan="3" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/papel.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-thirteenth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-twelveth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">13</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-twelveth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">PRESIÓN<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/presion.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-fourteenth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-thirteenth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">14</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden" align="right"
					data-anchor-target="#cd-timeline-thirteenth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">PERFILADORA<td><td style="width:30px;"></tr>
						<tr><td colspan="3" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/perfiladora.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div id="cd-timeline-fifteenth" class="cd-timeline-img is-hidden"
					data-anchor-target="#cd-timeline-fourteenth"
					data-start="@class:cd-timeline-img is-hidden"
					data-center="@class:cd-timeline-img bounce-in" data-emit-events>
					<div align="center" class="cd-timeline-inner">15</div>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content is-hidden"
					data-anchor-target="#cd-timeline-fourteenth"
					data-start="@class:cd-timeline-content is-hidden"
					data-center="@class:cd-timeline-content bounce-in" data-emit-events>
					<table width="60%" height="100%">
						<tr><td style="width:30px;">&nbsp;</td><td align="center" style="height: 30%; border-bottom: 3px dotted black; font-family: nexa; font-size: 1.4vw;">EMABLAJE<td><td style="width:30px;"></tr>
						<tr><td colspan="2" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/embalaje.png');background-repeat: no-repeat; background-size: contain;background-position:center center">&nbsp;<td></tr>
					</table>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
		</div>
	</section>
	<section id="galeria" class="homeSlide">
		<div align="left" class="title_underline" style="font-size: 1.5vw;">LA PLANTA MDF<br/><b>_</b></div>
		<div class="cd-slider-wrapper bcg" style="height:80%">
				<ul style="list-style: outside none none; padding-left: 0px;" class="cd-slider" data-step1="M1402,800h-2V0h1c0.6,0,1,0.4,1,1V800z" data-step2="M1400,800H379L771.2,0H1399c0.6,0,1,0.4,1,1V800z" data-step3="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" data-step4="M1402,800h-2V0h1c0.6,0,1,0.4,1,1V800z" data-step5="M1400,800H379L771.2,0H1399c0.6,0,1,0.4,1,1V800z" data-step6="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" data-step7="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" data-step8="M-2,800h2V0h-1c-0.6,0-1,0.4-1,1V800z" data-step9="M0,800h1021L628.8,0L1,0C0.4,0,0,0.4,0,1L0,800z" data-step10="M0,800h1400V0L1,0C0.4,0,0,0.4,0,1L0,800z">
					<li class="visible">
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-1">
										<path id="cd-changing-path-1" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-1)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta01.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-2">
										<path id="cd-changing-path-2" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-2)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta02.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-3">
										<path id="cd-changing-path-3" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-3)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta03.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-4">
										<path id="cd-changing-path-4" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-4)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta04.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>
					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-5">
										<path id="cd-changing-path-5" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-5)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta05.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-6">
										<path id="cd-changing-path-6" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-6)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta06.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-7">
										<path id="cd-changing-path-7" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-7)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta07.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

					<li>
						<div class="cd-svg-wrapper">
							<svg viewBox="0 0 1400 800">
								<defs>
									<clipPath id="cd-image-8">
										<path id="cd-changing-path-8" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z"/>
									</clipPath>
								</defs>

								<image height="104%" width="100%" clip-path="url(#cd-image-8)" xlink:href="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/planta08.jpg"></image>
							</svg>
						</div> <!-- .cd-svg-wrapper -->
					</li>

				</ul> <!-- .cd-slider -->

				<ul style="list-style:none" class="cd-slider-navigation">
					<li><a href="#0" class="next-slide">Next</a></li>
					<li><a href="#0" class="prev-slide">Prev</a></li>
				</ul> <!-- .cd-slider-navigation -->

				<ol style="list-style:none" class="cd-slider-controls">
					<li class="selected"><a href="#0"><em>Item 1</em></a></li>
					<li><a href="#0"><em>Item 2</em></a></li>
					<li><a href="#0"><em>Item 3</em></a></li>
					<li><a href="#0"><em>Item 4</em></a></li>
					<li><a href="#0"><em>Item 5</em></a></li>
					<li><a href="#0"><em>Item 6</em></a></li>
					<li><a href="#0"><em>Item 7</em></a></li>
					<li><a href="#0"><em>Item 8</em></a></li>
				</ol> <!-- .cd-slider-controls -->
		</div> <!-- .cd-slider-wrapper -->
	</section>
	<section id="spacer">
	<div style="height:150px">
	&nbsp;
	</div>
	</section>
</main>
<?php get_footer(); ?>