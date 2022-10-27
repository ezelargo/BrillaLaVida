<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("¿Qué hacemos?");    
      $header->setDescription("Somos un grupo solidario con ganas de ayudar y cambiar la realidad de muchas personas. Unimos nuestros talentos para poder aportar nuestro granito de arena a la sociedad.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>		
        
        <?php 
            $top_icon = 'fa-sun-o';
            $top_title = '¿Qué hacemos?';
            include("shared/section-top.php"); 
        ?>
        
		<section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2><b>Conectamos</b> personas que necesitan capacitaciones para mejorar su calidad de vida, <b>de manera gratuita</b>, con profesionales dispuestos a brindar sus conocimientos como un recurso útil de calidad.</h2>
						<span></span>
					</div>					
                   <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="about_content">
							<p><b>Ayudamos</b> a empresas privadas o emprendedores a adherir a una causa social y  promover su negocio, organizamos eventos y generamos acciones para recaudar fondos a beneficio de entidades públicas como <b>escuelas, hospitales y comedores</b>.
                            <br><br>
                            <b>El profesional gana en experiencia y adquiere algo tan valioso como los vínculos interpersonales</b> donde se desarrollan maneras de cooperación y <b>las personas se ven beneficiadas con el conocimiento que reciben gratuitamente</b> y desde la comodidad de su hogar, de manera virtual .
                            <br><br>
                            Creemos que el apoyo mutuo entre pares es fundamental para contribuir a un desarrollo equitativo de la sociedad.
                            <br><br>
                            Reunimos recursos humanos y materiales para:
                             <br><br>
                            ● Fomentar la disminución de la pobreza.
                             <br>
                            ● Mejorar la salud y bienestar.
                             <br>
                            ● Facilitar el acceso a formaciones gratuitas.
                             <br>
                            ● Luchamos por el derecho de un trabajo decente.
                             <br>
                            ● Trabajamos para reducir desigualdades.
                            <br><br>
                            Todo ésto lo hacemos convocando a profesionales o estudiantes universitarios que quieran impartir charlas y capacitaciones a emprendedores, empleados o personas en situación de búsqueda activa de trabajo.
                            <br><br>
                            Las cifras recaudadas y los insumos que se compran con los donativos se detallan, especifican y están a disposición de quien quiera conocerlas.
                            </p><br><br>
                            <h2>¿Qué necesitás?</h2>
                            <br>
                            <div class="container">
                                <div class="about_content">
                                    <a class="btn btn-light-bg" href="contacto.php" title="¡Sumate a la iniciativa!">
                                        <b>
                                         Necesito capacitación
                                        </b>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="container">
                                <div class="about_content">
                                    <a class="btn btn-light-bg" href="contacto.php" title="¡Sumate a la iniciativa!">
                                        <b>
                                         Quiero capacitar a otros y ganar experiencia
                                        </b>
                                    </a>
                                </div>    
                            </div>
                            <br>
                            <div class="container">
                                <div class="about_content">
                                    <a class="btn btn-light-bg" href="contacto.php" title="¡Sumate a la iniciativa!">
                                        <b>
                                         Soy empresa y quiero adherir a una causa social
                                        </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
       
        <?php include('shared/contact.php'); ?>
		
        <?php include('shared/footer.php'); ?>
				 
		<?php include('shared/scripts.php'); ?>
        																				
    </body>
</html>