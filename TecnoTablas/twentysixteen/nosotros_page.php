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
	<section id="intro" class="homeSlide" style="min-width:50px;">
		<div class="bcg" data-anchor-target="#intro">
			<div class="hsContainer" style="">
			<table style="background-color:#D59236;height:100%;width:100%;" class="introTb">
				<tr>
					<td data-start="background-position: 0px 0px;" data-center="background-position: 0px 0px;" data-center-bottom="background-position: -800px 0px;"
						data-anchor-target="#intro .introTb" style="height:100%; width:50%; background: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/nsBg1.png) no-repeat fixed left center/ 50% 100%">
					</td>
					<td data-start="background-position: 100% 0px;" data-center="background-position: 100% 0px;" data-center-bottom="background-position: 200% 0px;"
						data-anchor-target="#intro .introTb" style="height:100%; width:50%; background: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/nsBg2.png) no-repeat fixed right center/ 50% 100%">
					</td>
				</tr>
			</table>
			</div>
			<div class="hsContainer" style="position:relative;top:-100%;">
				<table style="height:100%;width:100%;">
					<tr style="font-family: nexa; font-size: 1.3vw; line-height: 1.2; height: 30%; color: white;">
						<td colspan="3" style="text-align: center;">
							<div data-start="left: 0px;" data-center="left: 0px;" data-center-bottom="left: -800px;" data-anchor-target="#intro .introTb"
								style="position:relative; font-size:5vw">
								<b>NOSOTROS</b>
							</div>
						</td>
					</tr>
					<tr style="font-family: nexa; font-size: 1.3vw; line-height: 1.2; height: 30%; color: white;">
						<td colspan="2" style="text-align: center;width:40%">
							<div data-start="left: 0px;" data-center="left: 0px;" data-center-bottom="left: -800px;" data-anchor-target="#intro .introTb"
								style="position:relative">
								SOMOS LA <b>PRIMERA EMPRESA MEXICANA</b></br>
								EN FABRICAR TABLEROS ESPECIALIZADOS DE </br>
								BUENA MADERA, CON MATERIA PRIMA <b>100 %</br>
								SUSTENTABLE</b>, PROVENIENTE DE NUESTRAS </br>
								PLANTACIONES FORESTALES RENOVABLES, </br>
								TECNOLOGÍA DE PUNTA Y UN ENFOQUE EN </br>
								<b>INNOVACIÓN DE PRODUCTOS. </b>
							</div>
						</td>
						<td style="text-align: center;width:40%">&nbsp;</td>
					</tr>
					<tr style="font-family: nexa; font-size: 1.3vw; line-height: 1.2; height: 20%; color: white;">
						<td style="text-align: center;width:40%">&nbsp;</td>
						<td colspan="2" style="text-align: center;width:40%">
							<div data-start="left: 0px;" data-center="left: 0px;" data-center-bottom="left: 800%;" data-anchor-target="#intro .introTb"
								style="position:relative">
								EL CONTROL DE LA MATERIA PRIMA NOS </br>
								PERMITE OFRECER AL MERCADO </br>
								<b>TABLEROS DE ALTA CALIDAD. </b>
							</div>
						</td>
					</tr>
					<tr style="font-family: nexa; font-size: 1.3vw; line-height: 1.2; height: 20%; color: white;">
						<td colspan="3" style="text-align: center; width: 40%; background-position: 0px 0px; padding-left: 15%;">
							<div data-start="left: 0px;" data-center="left: 0px;" data-center-bottom="left: -1200px;" data-anchor-target="#intro .introTb"
								style="position:relative">
								<b>QUE HACEN PROYECTOS REALIDAD</b>
							</div>
						</td>
					</tr>
				</table>
				<div data-anchor-target="#intro" style="font-family: nexa; font-size: 1.3vw; line-height: 1.2; height: 34%; color: white; position: relative; top: 50%; left: 10%;">
				asdsadsa
				</div>
				<div style="font-family: nexa; font-size: 1.3vw; line-height: 1.2; height: 34%; color: white; position: relative; top: 50%; left: 10%;">

				</div>
			</div>
		</div>
	</section>
	<section id="adn" class="homeSlide" >
		<div class="bcg" style="background-color:#D59236" data-anchor-target="#adn" align="center">
			<div class="hsContainer">
			<div align="center" style="font-family: nexa; color:white; position:relative; font-size:5vw">
				<b>NUESTRO ADN</b>
			</div>
			<div align="center" style="font-family: nexa; color:white; position:relative; font-size:1.8vw">
				CREAMOS TABLEROS ESPECIALIZADOS DE</br>
				BUENA MADERA PARA HACER TUS PROYECTOS</br>
				REALIDAD.
			</div>
			<img class="aStart" data-bottom-top="transform: rotate(180deg); transform-origin: 50% 50% 0;" data-center-top="transform: rotate(0deg); transform-origin: 50% 50% 0;"
				data-anchor-target="#adn .aStart" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/circle1.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
			<img data-bottom-top="transform: rotate(-180deg); transform-origin: 50% 50% 0;" data-center-top="transform: rotate(0deg); transform-origin: 50% 50% 0;"
				data-anchor-target="#adn" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/circle2.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
			<img data-bottom-top="transform: rotate(180deg); transform-origin: 50% 50% 0;" data-center-top="transform: rotate(0deg); transform-origin: 50% 50% 0;"
				data-anchor-target="#adn .aStart" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/circle3.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
				<img data-bottom-top="opacity:0;" data-center-top="opacity:1;"
				data-anchor-target="#adn .aStart" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/circletext1.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
			<img data-bottom-top="opacity:0;" data-center-top="opacity:1;"
				data-anchor-target="#adn .aStart" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/circletext2.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
			<img data-bottom-top="opacity:0;" data-center-top="opacity:1;"
				data-anchor-target="#adn .aStart" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/circletext3.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
			<img data-bottom-top="opacity:0;" data-center-top="opacity:1;"
				data-anchor-target="#adn .aStart" src="http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/clearLogo.png"
				style="width: 40vw; height: 40vw; position: absolute; left: 30vw;top:15vh;"/>
			</div>
		</div>
	</section>
	<section id="timeline" class="homeSlide homeSlideTall">
		<div class="bcg" style="background-image:url('http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/Nosotros/bg_historia.png')" data-anchor-target="#timeline">
			<div align="center" style="position:relative;width=100%;font-family: nexa; font-size: 5vw; line-height: 1.2;color: white; height:20vh;padding-top:8vh">
				<b>HISTORIA</b>
			</div>
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
		<div class="bcg" align="center" style="background-color:#3D5B58" data-anchor-target="#propuesta">
			<div align="center" style="position:relative;width:80%;font-family: nexa; font-size: 1.3vw; line-height: 1.2;color: white; height:3vh;">
				&nbsp;
			</div>
			<div align="center" style="position: relative; font-family: nexa; font-size:3.5vw; line-height: 1.2; color: white; height: 16vh; padding-top: 3vh; border-top: 5px solid white; border-bottom: 5px solid white; width: 80%;">
				<b>PROPUESTA DE VALOR</b>
			</div>
			<div align="center">
				<div align="center" style="position:relative;width=80%;font-family: nexa; font-size: 1.3vw; line-height: 1.2;color: white; height:5%;">
					&nbsp;
				</div>
				<table style="font-family: nexa; font-size: 1.3vw; color: white;" width="80%" height="80%">
					<tr style="border-bottom: 5px solid white;" class="propuestaRow1">
						<td style="border-right: 5px solid white;">
							<table width="100%" height="100%">
								<tr>
									<td style="width:20%">
										<div style="position:relative;font-size:25vh" data-bottom-top="right:180px;opacity:0" data-center-top="right:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1"><b>1</b></div>
									</td>
									<td style="vertical-align:text-top">
										<div style="position:relative" data-bottom-top="right:180px;opacity:0" data-center-top="right:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1">
											<div style="font-size:3.5vh">ALTA <b>CALIDAD</b></div>
											<ul>
												<li>Tableros que provienen del tronco, no de desperdicios</li>
												<li>La mejor y más avanzada tecnología de fabricación alemana</li>
												<li>Control del suminsitro de materia prima de nuestras plantaciones que garantiza la calidad</li>
												<li>Proyecto industrial integrado del arbol al tablero</li>
											</ul>
										</div>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<table width="100%" height="100%">
								<tr>
									<td style="width:20%">
										<div style="position:relative;font-size:25vh" data-bottom-top="bottom:180px;opacity:0" data-center-top="bottom:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1"><b>2</b></div>
									</td>
									<td style="vertical-align:text-top">
										<div style="position:relative;" data-bottom-top="bottom:180px;opacity:0" data-center-top="bottom:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1">
											<div style="font-size:3.5vh">DESARROLLAMOS <b>MÉXICO</b> Y NUESTRO ENTORNO</div>
											<ul>
												<li>Bosques sustentables certificados FSC&reg;</li>
												<li>Creación de empleos</li>
												<li>Industria limpia, generamos nuestra propia energía</li>
												<li>Promovemos el espíritu emprendedor</li>
												<li>Empresa 100% Mexicana</li>
											</ul>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr class="propuestaRow2">
						<td style="border-right: 5px solid white;">
							<table width="100%" height="100%">
								<tr>
									<td style="width:20%">
										<div style="position:relative;font-size:25vh" data-bottom-top="top:180px;opacity:0" data-center-top="top:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1"><b>3</b></div>
									</td>
									<td style="vertical-align:text-top">
										<div style="position:relative;" data-bottom-top="top:180px;opacity:0" data-center-top="top:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1">
											<div style="font-size:3.5vh"><b>SOLUCIONES</b> DIFERENCIADAS Y DE <b>VALOR AGREGADO</b></div>
											<ul>
												<li>Diferentes soluciones para cada necesidad</li>
												<li>Tableros especializados que se adecuan a los usos frecuentes del MDF</li>
												<li>Últimas tendencias de diseño</li>
												<li>Tableros sustentables y certificados internacionalmente</li>
											</ul>
										</div>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<table width="100%" height="100%">
								<tr>
									<td style="width:20%">
										<div style="position:relative;font-size:25vh" data-bottom-top="left:180px;opacity:0" data-center-top="left:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1"><b>4</b></div>
									</td>
									<td style="vertical-align:text-top">
										<div style="position:relative;" data-bottom-top="left:180px;opacity:0" data-center-top="left:0px;opacity:1" data-anchor-target="#propuesta .propuestaRow1">
											<div style="font-size:3.5vh">EXPERIENCIA DE <b>COMPRA ÚNICA</b></div>
											<ul>
												<li>Orientación al cliente</li>
												<li>Entrenamiento y capacitación especializada en MDF</li>
												<li>Personal técnicamente capacitado y especializado</li>
												<li>Entregas Puntuales</li>
											</ul>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</section>
	<section id="spacer">
	<div style="height:150px;background-color:#3D5B58">
	&nbsp;
	</div>
	</section>
</main>
<?php get_footer(); ?>