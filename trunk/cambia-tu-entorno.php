<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("cambiá tu entorno");    
      $header->setDescription("Somos un grupo solidario con ganas de ayudar y cambiar la realidad de muchas personas. Unimos nuestros talentos para poder aportar nuestro granito de arena a la sociedad.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>		
        
        <?php 
            $top_icon = 'fa-sun-o';
            $top_title = 'cambiá tu entorno';
            include("shared/section-top.php"); 
        ?>
        
		<section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">
                <div class="section-title text-center">
						<h2>Juntos podemos hacer un cambio</h2>
						<span></span>
				   </div>									
                   <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="about_content">
							<p>Cada día las personas y organismos deben asumir la responsabilidad social de contribuir a crear un mundo más sostenible, equitativo y respetuoso con las culturas locales para ello <b>abrazar una causa social o amigable con el medio ambiente o la sociedad es fundamental.</b> 
                            <br><br>
                            Si sientes el llamado solidario de cooperar y ayudar al prójimo, este es tu lugar. Te invitamos a conocernos y formar parte de nuestras causas.
                            <br><br>
                            Tus donativos pueden impactar en la vida de otros de manera positiva y generar un cambio que haga una diferencia real. Con tu contribución podés lograr que una madre dé a luz a su hijo en un parto sin riesgos, con los insumos necesarios y las atenciones dignas que merecen ella y su futuro bebé, así como se hizo para la Sala de Maternidad del hospital Ramos Mejía que recibió instrumental y materiales necesarios para una correcta asistencia de las madres y bebés.
                             <br><br>
                             Tener un accidente, perder la movilidad en la piernas y saber que dependés de una rehabilitación rigurosa para poder volver a caminar, puede ser muy doloroso, pero con la ayuda de voluntarios y empresas como Nobleza Obliga los pacientes del sector de kinesiología del Hospital Ramos Mejía recibieron los elementos necesarios para realizar las actividades que disminuyan dolores y fortalezcan sus músculos para la mejora de su calidad de vida.
                             <br><br>
                             Gracias a las lámparas infrarrojas donadas se aliviaron inflamaciones y mejoró notablemente su flujo sanguíneo, además de presentar una regeneración celular y reparación en los tejidos, su calidad de vida mejoró.
                             <br><br>
                             Así mismo el sector de cardiología del Hospital Ramos Mejía recibió pequeños instrumentos e insumos hospitalarios, hasta un resucitador de excelencia que tan vital importancia y utilidad tiene.
                             <br><br>
                             Una vez realizada la labor <b>Brilla te ayuda a comunicar la acción en todas tus plataformas digitales como así también lo comunicaremos en todos nuestros canales de comunicación</b>, redes sociales y canal de Youtube para que tu empresa sea reconocida por pertenecer al movimiento de cambio y cooperación con el servicio de agentes sociales y al servicio del bien de la humanidad.
                             <br><br>
                             El cambio comienza con pequeñas acciones, comenzá hoy, rellená el formulario y hacé que tu empresa o emprendimiento tenga ya una causa social.</p>
                            <br><br>
                        </div>
                    </div>
				</div>
			</div>
		</section>
       	
        <section class="section_grey section-padding">
			<div class="container">
				<div class="row text-center">
                    <a class="btn btn-light-bg" href="formar-parte-de-brilla-la-vida.php" title="¡Sumate a la iniciativa!">
                        <b>
                            Quiero que me contacten
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