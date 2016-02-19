<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<main>
	
	<section id="inicio" class="homeSlide">
		
<div style="width:100%; height:100%; padding-left:0; padding-right:0;" id="myCarousel" class="carousel container slide"> <div class="carousel-inner" style="width:100%; height:100%">
		<div class="bcg item active one"></div>
		<div class="bcg item two"></div>
		<div class="bcg item three"></div>
		<div class="bcg item four"></div>
		<div class="bcg item five"></div>
		<div class="bcg item six"></div>
		<div class="bcg item seven"></div>
		<div class="bcg item eight"></div>
</div>
	</div>
	
	</section>
	<span style="display: block; height: 45px; margin-top: -45px; visibility: hidden;" id="soluciones"></span>
	<section style="height:0%">
		<div data-anchor-target="#soluciones">
            <div class="hsContainer" style="height:60vh;top:8vh;position:static">
                <div class="hsContent" data-anchor-target="#soluciones">
		    <div>
			<div align="left" style="font-family:nexa; color:black; font-size:1.6vw;padding-left:5vw;height:10vh;display:table-cell;vertical-align:middle;">SOLUCIONES EN MDF</div>
                    <table id="solucionesTable" class="buttonsSoluciones" style="display:block;">
                        <tr>
                            <td style="width:43vw;overflow: hidden">
                                <a class="buttonImg" href="basicas" style="text-decoration:none;"  data-anchor-target="#soluciones" data-bottom-top="position:relative; top:60%;" data-100-center="position:static; top:0%;">
				    <div>
				    	<div style="font-family:nexa; text-decoration:none; color:white; text-align:right; background-color:#435D5A; font-size:2vw;">
						BÁSICAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    	</div>
				    	<div style="font-family:nexa; text-decoration:none; color:white; text-align:right; background-color:transparent; font-size:.8vh;"> &nbsp; </div>
					<div class="deImg" style="line-height:25.8vmax;background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/basicas_base.png);"> &nbsp;</div>
				    </div>
                                </a>
                            </td>
			    <td style="width:1vw">&nbsp;</td>
			    <td style="width:25vw;overflow: hidden">
                                <a href="#inicio" class="buttonImg" style="text-decoration:none;">
				    <div class="buttonImg" data-anchor-target="#soluciones" data-bottom-top="position:relative; top:70%;" data-100-center="position:static; top:0%;">
				    	<div style="font-family:nexa; text-decoration:none; color:white; text-align:center; background-color:#D59236; font-size:2vw;">
						ESPECIALIZADAS
				    	</div>
				    	<div style="font-family:nexa; text-decoration:none; color:white; text-align:right; background-color:transparent; font-size:.8vh;"> &nbsp; </div>
					<div class="deImg" style="line-height:25.8vmax;background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/especializadas_base.png);"> &nbsp;</div>
				    </div>
                                </a>
                            </td>
			    <td style="width:1vw">&nbsp;</td>
                            <td style="width:30vw;overflow: hidden">
                                <a href="#inicio" class="buttonImg" style="text-decoration:none;">
				    <div data-anchor-target="#soluciones" data-bottom-top="position:relative; top:80%;" data-100-center="position:static; top:0%;">
				    	<div style="font-family:nexa; text-decoration:none; color:white; text-align:left; background-color:#9F2743; font-size:2vw;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DECORATIVAS
				    	</div>
				    	<div style="font-family:nexa; text-decoration:none; color:white; text-align:right; background-color:transparent; font-size:.8vh;"> &nbsp; </div>
					<div class="deImg" style="line-height:25.8vmax;background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/decorativas_base.png);"> &nbsp;</div>
				    </div>
                                </a>
                            </td>                           
                        </tr>
                    </table>
		    </div>
                </div>
            </div>
		</div>
	</section>
	<span style="display: block; height: 45px; margin-top: -45px; visibility: hidden;" id="tendencias"></span>
	<section style="height:0%">

		<div data-anchor-target="#tendencias">
            <div class="hsContainer" style="height:60vh;top:8vh;position:static">
                <div class="hsContent" data-anchor-target="#tendencias" style="display:inline;">
		    <div>
			<div align="left" style="font-family:nexa; color:black; font-size:1.6vw;padding-left:5vw;height:10vh;display:table-cell;vertical-align:middle;">TENDENCIAS</div>
                    <table id="solucionesTable" class="buttonsSoluciones" style="height:80vh">
                        <tr>
				<td width="50%" height="50%" style="overflow: hidden; border-bottom: 5px solid white; border-right: 5px solid white;">
					<div id="diseno" data-anchor-target="#tendencias" style="width:100%;height:100%"
						data-bottom="@class:animateTstartB"
						data-center="@class:animateTend" data-edge-strategy="set">
						<a href="#inicio" class="buttonImg" style="text-decoration:none;" data-anchor-target="#tendencias">
							<div class="deImg" style="background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/diseno.png); height:100%">
								&nbsp;
							</div>
							<div style="font-family: nexa; text-decoration: none; color: black; text-align: right; background-color: rgba(255, 255, 255, 0.5); font-size: 2vw; position: relative; top: -2.5vw;">
								DISEÑO MEXICANO&nbsp;&nbsp;&nbsp;
							</div>
						</a>
				    </div>
				</td>
				<td width="30%" height="50%" style="overflow: hidden; border-bottom: 5px solid white; border-right: 5px solid white;">
					<div id="utopia" data-anchor-target="#tendencias" style="width:100%;height:100%"
						data-bottom="@class:animateTstartA"
						data-center="@class:animateTend" data-edge-strategy="set">
					<a href="#inicio" class="buttonImg" style="text-decoration:none;" data-anchor-target="#soluciones">
						<div class="deImg" style="background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/utopia.png); height:100%">
							&nbsp;
						</div>
						<div align="center" style="font-family: nexa; text-decoration: none; color: black; text-align: left; background-color: rgba(255, 255, 255, 0.5); font-size: 2vw; position: relative; top: -2.5vw;">
							&nbsp;&nbsp;&nbsp;UTOPÍA
						</div>
                    </a>
                	</div>
                </td>
				<td width="20%" height="50%" style="overflow: hidden; border-bottom: 5px solid white;">
					<div id="nomada" data-anchor-target="#tendencias" style="width:100%;height:100%"
						data-bottom="@class:animateTstartC"
						data-center="@class:animateTend" data-edge-strategy="set">
					<a href="#inicio" class="buttonImg" style="text-decoration:none;" data-anchor-target="#soluciones">
						<div class="deImg" style="background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/nomada.png); height:100%">
							&nbsp;
						</div>
						<div style="font-family: nexa; text-decoration: none; color: black; text-align: left; background-color: rgba(255, 255, 255, 0.5); font-size: 2vw; position: relative; top: -2.5vw;">
							&nbsp;&nbsp;&nbsp;NÓMADA
						</div>
					</a>
				</td>
			</tr>
			<tr>
				<td height="50%" style="overflow: hidden;border-right: 5px solid white;">
					<div id="virtual" data-anchor-target="#nomada" style="width:100%;height:100%"
						data-bottom="@class:animateTstartB"
						data-center="@class:animateTend" data-edge-strategy="set">
					<a href="#inicio" class="buttonImg" style="text-decoration:none;" data-anchor-target="#soluciones">
						<div class="deImg" style="background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/virtual.png); height:100%">
							&nbsp;
						</div>
						<div style="font-family: nexa; text-decoration: none; color: black; text-align: right; background-color: rgba(255, 255, 255, 0.5); font-size: 2vw; position: relative; top: -100%;">
							VIRTUAL&nbsp;&nbsp;&nbsp;
				    	</div>
				    </a>
				    </div>
				</td>
				<td height="50%" colspan="2" style="overflow: hidden;">
					<div id="alquimia" data-anchor-target="#nomada" style="width:100%;height:100%"
						data-bottom="@class:animateTstartA"
						data-center="@class:animateTend" data-edge-strategy="set">
					<a href="#inicio" class="buttonImg" style="text-decoration:none;" data-anchor-target="#soluciones">
						<div class="deImg" style="background-image: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/alquimia.png); height:100%">
							&nbsp;
						</div>
						<div style="font-family: nexa; text-decoration: none; color: black; text-align: left; background-color: rgba(255, 255, 255, 0.5); font-size: 2vw; position: relative; top: -100%;">
							&nbsp;&nbsp;&nbsp;ALQUIMIA
						 </div>
					</a>
					</div>
				</td>
				</tr>

                    </table>
                </div>
            </div>
		</div>
	</section>
	<span style="display: block; height: 45px; margin-top: -45px; visibility: hidden;" id="nosotros"></span>
	<section class="homeSlide" style="min-width:50px;height:600px">
	<div align="left" style="font-family:nexa; color:black; font-size:1.6vw;padding-left:5vw;height:10vh;display:table-cell;vertical-align:middle;">NOSOTROS</div>
		<div class="bcg" data-anchor-target="#nosotros" style="background: url(http://23.253.99.79/desarrollo/tecnotabla/wordpress/wp-content/themes/twentysixteen/img/nosotros.jpg) no-repeat center center / cover; background-attachment: fixed;top:8vh;">
			<div class="hsContainer">
				<div class="hsContent" data-anchor-target="#nosotros">
				</div>
			</div>
		</div>
		<div class="bcg" align="center" data-anchor-target="#nosotros" style="background: rgba(255, 255, 255, 0.5) none repeat scroll 0% 0%; position: relative; top: -100%; height: 100%; font-family: nexa; line-height: 1.2; color: white; font-size: 2vw;">
			<div class="sc_menu" style="top:25%;">
			    <ul class="sc_menu"></br>
				        <li><div class="nosBtn" style="">
							<a style="cursor:pointer;text-decoration:none" href="nosotros">
								<table style="height: 100%; width: 100%; color: white;">
									<tr height="50%">
										<td style="vertical-align: bottom;padding-left:5%">
											¿QUIÉNES</br>SOMOS?
										</td>
									</tr>
									<tr height="50%">
										<td align="center" style="font-size: 3vw;">
											<b>+</b>
										</td>
									</tr>
								</table>
							</a>
						</div></li>
				        <li><div class="nosBtn" style="">
							<a style="cursor:pointer;text-decoration:none" href="nosotros/#adn">
								<table style="height: 100%; width: 100%; color: white;">
									<tr height="50%">
										<td style="vertical-align: bottom;padding-left:5%">
											NUESTRO</br>ADN
										</td>
									</tr>
									<tr height="50%">
										<td align="center" style="font-size: 3vw;">
											<b>+</b>
										</td>
									</tr>
								</table>
							</a>
						</div></li>
				        <li><div class="nosBtn" style="">
							<a style="cursor:pointer;text-decoration:none" href="nosotros/#timeline">
								<table style="height: 100%; width: 100%; color: white;">
									<tr height="50%">
										<td style="vertical-align: bottom;padding-left:5%">
											HISTORIA
										</td>
									</tr>
									<tr height="50%">
										<td align="center" style="font-size: 3vw;">
											<b>+</b>
										</td>
									</tr>
								</table>
							</a>
						</div></li>
									<li><div class="nosBtn" style="">
							<a style="cursor:pointer;text-decoration:none" href="nosotros/#propuesta">
								<table style="height: 100%; width: 100%; color: white;">
									<tr height="50%">
										<td style="vertical-align: bottom;padding-left:5%">
											PROPUESTA</br>DE VALOR
										</td>
									</tr>
									<tr height="50%">
										<td align="center" style="font-size: 3vw;">
											<b>+</b>
										</td>
									</tr>
								</table>
							</a>
						</div></li>
						<li><div class="nosBtn" style="">
							<a style="cursor:pointer;text-decoration:none" href="#">
								<table style="height: 100%; width: 100%; color: white;">
									<tr height="50%">
										<td style="vertical-align: bottom;padding-left:5%">
											LA PLANTA</br>MDF
										</td>
									</tr>
									<tr height="50%">
										<td align="center" style="font-size: 3vw;">
											<b>+</b>
										</td>
									</tr>
								</table>
							</a>
						</div></li>
						<li><div class="nosBtn" style="">
							<a style="cursor:pointer;text-decoration:none" href="#">
								<table style="height: 100%; width: 100%; color: white;">
									<tr height="50%">
										<td style="vertical-align: bottom;padding-left:5%">
											¿CÓMO LO</br>HACEMOS?
										</td>
									</tr>
									<tr height="50%">
										<td align="center" style="font-size: 3vw;">
											<b>+</b>
										</td>
									</tr>
								</table>
							</a>
						</div></li>
    			</ul>
			</div>
		</div>
	</section>
	<span style="display: block; height: 45px; margin-top: -45px; visibility: hidden;" id="madera"></span>
	<section class="homeSlide">
		<div data-anchor-target="#madera">
			<div class="hsContainer">
				<div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#madera">
				</div>
			</div>
		</div>
	</section>
	<span style="display: block; height: 45px; margin-top: -45px; visibility: hidden;" id="descargas"></span>
	<section class="homeSlide">
		<div data-anchor-target="#descargas">
			<div class="hsContainer">
				<div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#descargas">
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
