<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Nuestras historia");    
      $header->setDescription("El compromiso es nuestra base para cumplir con los objetivos y reconocer las necesidades de la sociedad.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
				        
        <?php 
            $top_icon = 'fa-heart';
            $top_title = 'Nuestras historia';
            include("shared/section-top.php"); 
        ?>
        
        <section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Asi comenzamos</h2>
						<span></span>
					</div>					                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<p style="margin-left: 10px;">
							Brilla la Vida surgió de la necesidad de ayudar al prójimo, de ver carencias sociales y sentir el deseo altruista de colaborar.
                            <br><br>
                            Creemos que <b>el ser humano se vé realizado cuando encuentra la manera de ayudar al otro haciendo lo que le apasiona</b>  y por eso utilizamos nuestras herramientas que son los conocimientos adquiridos y nuestro tiempo para ponerlos al servicio de aquellos que están en una situación desfavorable. Nuestro mayor anhelo es que cada ser humano pueda desarrollar al máximo potencial sus habilidades y dones para alcanzar una vida plena.</p>
						</div>
                    </div>                               
				</div>
                <br>
                <div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h2>Marco global:</h2>
							<p style="margin-left: 10px;">
							El 25 de septiembre de 2015, los líderes mundiales adoptaron un conjunto de 17 objetivos globales para un <b>desarrollo sostenible:</b>
                            <br>
                            Erradicar la pobreza, proteger el planeta y asegurar la prosperidad para todos. Anhelan lograr un desarrollo del planeta sostenible.
                            <br><br>
                            Cada objetivo tiene metas específicas que deben alcanzarse en los próximos 15 años. <b> Esos objetivos son:</b> </p>
                            <br>
                           <div class="text-center">
                             <img src="assets/img/nuestra_historia/imagen_cuadros-01.jpg" alt="desarrollo sostenible">
                            </div>
                            <br>
                            <p style="margin-left: 10px;"> Para alcanzar estas metas, todo el mundo tiene que hacer su parte: gobiernos, sector privado, sociedad civil y las personas.
                            <br><br>
                            Es por eso que “Brilla la Vida” encuentra su modo de aportar a la sociedad y contribuir a alcanzar esos objetivos comunes: el trabajo decente, 
                            un crecimiento personal inclusivo y sostenido, propiciar el progreso de emprendedores y empleados para mejorar sus estándares de vida. </p>
						    <br><br>
                        </div>
                    </div>                   
				</div>
				<div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h2>Puntos en lo que brilla la vida participa activamente:</h2>
							<div class="text-center" >
                             <img src="assets/img/nuestra_historia/imagen_cuadros-02.jpg" alt="desarrollo sostenible">
                            </div>
                        <br><br>
                        </div>
                    </div>                   
				</div>
				<div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h2>Nuestros primeros pasos:</h2>
							<p style="margin-left: 10px;">
							Comenzamos con éste sueño en el año 2016, reunimos nuestros recursos y tiempo con la meta de contrarrestar la pobreza, fomentar la educación y ayudar a brindar una atención sanitaria digna entre otras cosas.
                           <br><br>
						    La pandemia del Covid 19 interrumpió nuestras acciones y eventos sociales en los que recaudábamos fondos para los donativos, pero continuamos brindando capacitaciones on line gratuitas para aquellas personas que necesitaban actualizarse para acceder al mercado laboral.</p>
						  <br><br>
                        </div>
                    </div>                   
				</div>
				<div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h2>Brilla se renueva</h2>
							<p style="margin-left: 10px;">
							Las necesidades han crecido y la brecha de desigualdad se ha engrandecido por eso decidimos renovarnos, reunir esfuerzos, recursos y continuar con la tarea de ayudar con el compromiso, honestidad, transparencia y cooperación de nuestros voluntarios.
						    <br><br>
                            Brilla la Vida se renueva, cooperando por el bien de los más necesitados, esperamos que más personas se vean beneficiadas por nuestras acciones conjuntas, todos tenemos algo que aportar, vos también podés ser parte de Brilla La Vida.</p>
						</div>
                    </div>                   
				</div>
			</div>
		</section>

		<section class="section_grey section-padding">
			<div class="container">
				<div class="row text-center">
                    <a class="btn btn-light-bg" href="contacto.php" title="¡Sumate a la iniciativa!">
                        <b>
                            Generá el cambio con nosotros
                        </b>
                    </a>
                </div>
            </div>
        </section>
				            
        <?php include('shared/contact.php'); ?>
		
        <?php include('shared/footer.php'); ?>
				 
		<?php include('shared/scripts.php'); ?>
        																				
    </body>
</html>