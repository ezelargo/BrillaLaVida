<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Sobre nosotros");    
      $header->setDescription("Somos un grupo solidario con ganas de ayudar y cambiar la realidad de muchas personas. Unimos nuestros talentos para poder aportar nuestro granito de arena a la sociedad.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>		
        
        <?php 
            $top_icon = 'fa-sun-o';
            $top_title = 'Sobre nosotros';
            include("shared/section-top.php"); 
        ?>
        
		<section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Somos un grupo solidario con muchas ganas de ayudar y cambiar la realidad de muchas personas. Unimos nuestros talentos y conocimientos para poder aportar nuestro granito de arena a la sociedad.</h2>
						<span></span>
					</div>					
                   <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about_content">
							<h1>Identidad</h1>
							<p>Brilla la Vida es una organización sin fines de lucro que trabaja día a día, sumando mayores expectativas, ideas y nuevos proyectos solidarios por llevar a cabo.</p>
                            <br>
                            <p>"Cuando uno brilla, brilla la vida y se enciende todo a tu alrededor", dice una canción de la cantante Patricia Sosa. Y con esas palabras como consigna, <b>Romina Blanco</b>, fundadora y coordinadora general de la ONG tomó la iniciativa en el año 2015 de ayudar al Hospital Ramos Mejía. Así nació el grupo solidario que pronto llevaría el nombre de <b>Brilla la Vida</b>.</p>
							<p class="mbtop">Formado por estudiantes que muestran su interés por la causa, esta organización comenzó a tomar vida gracias a la colaboración de mucha gente y, con gran éxito, "Brilla la vida" sigue creciendo.</p>
						</div>
                    </div>
                   <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about-slide">
							<iframe src="https://player.vimeo.com/video/209589129"></iframe>                            
						</div>
                    </div>
				</div>
			</div>
		</section>			
        
        <section class="about_us section-padding">
			<div class="container">
				<div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about_content text-center">
							<h1>Visión</h1>
                            <p>Ser reconocidos como una organización social sin ánimo de lucro innovadora, abierta al entorno, referente de su área y cuya acción esté orientada a la calidad en la integración social y la ayuda al prójimo, impulsadas por una alta motivación del voluntariado que la conforma.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about_content text-center">
							<h1>Misión</h1>
                            <p>Brilla la vida, es una organización que tiene como misión realizar eventos solidarios benéficos para instituciones tales como hospitales, comedores y escuelas carenciadas.                               
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our_activites">
            <div class="container">
                <div class="row text-center">
                    <div class="section-title wow zoomIn">
                        <h2>Transparencia en el uso de los fondos</h2>
                        <span></span>
                        <p>
                            En Brilla la Vida nos preocupa la transparencia en el uso de los fondos y donaciones que llegan a nuestra organización para ayudar a los que más nos necesitan. Por esta razón, presentaremos cada año el balance de ingresos, gastos y donaciones para que todos conozcan el impacto positivo de nuestra ONG:
                            <br><br>
                            <a style="font-size: 1.2em; color: blue;" href="uploads/transparencia_de_los_fondos/brilla_la_vida_ingresos_y_gastos_anio_2018.pdf" target="_blank" title="Ingresos y Gastos del año 2018">Descargar Ingresos y Gastos del año 2018</a>                                                    
                        </p>
                    </div>                    
                </div>
            </div>
        </section>
                        
        <?php include('shared/valores.php'); ?>
               
        <section class="section_grey section-padding">
			<div class="container">
				<div class="row text-center">
                    <a class="btn btn-light-bg" href="formar-parte-de-brilla-la-vida.php" title="¡Sumate a la iniciativa!">
                        <b>
                            <i class="fa fa-users" aria-hidden="true"></i> 
                            ¡Sumate al equipo de Brilla la vida!
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