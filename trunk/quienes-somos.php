<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("¿Quienes somos?");    
      $header->setDescription("Somos un grupo solidario con ganas de ayudar y cambiar la realidad de muchas personas. Unimos nuestros talentos para poder aportar nuestro granito de arena a la sociedad.");
      include("shared/header.php");      
    ?>	
            
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
        
        <?php 
            $top_icon = 'fa-users';
            $top_title = 'Nuestro Equipo';
            include("shared/section-top.php"); 
        ?>
        
		<section id="team" class="template_team">
    <div class="container"> 
        <div class="row text-center"> 
            <div class="section-title wow zoomIn">
                <h2>“Unidos para ayudar”</h2>
                <span></span>
                <p>Como equipo nos proponemos tener una conciencia crítica que modele una conciencia global para compartir y cooperar.
                <br><br>
                 Desde la integridad nos apoyamos en la solidaridad, el talento y el esfuerzo, nos identificamos con las esperanzas y deseos de los demás.
                <br><br>
                 Nuestro reto es enfrentar las restricciones y abrirnos camino ante la adversidad por empatía y la responsabilidad que sentimos hacia las necesidades del otro.
                <br><br>
                 Anhelamos que todos puedan llevar una vida de plenitud y excelencia que les permita brillar en cada área de su vida, por eso asumimos la responsabilidad de guía y apoyo.
                <br><br>
                 Nuestro mayor anhelo es contagiar la emoción y satisfacción por ayudar al prójimo, de demostrar que querer es poder, de descubrir que somos capaces juntos de cruzar metas con amor, humildad y humor.
                <br><br>
                 La cercanía del equipo de voluntarios crea lazos que benefician a la sociedad.
                 <br><br>
               <strong>Somos pilares y compañeros en esta bella tarea.</strong> 
                </p>
            </div>
            <div class="container">
				<div class="row text-center">
                    <a class="btn btn-light-bg" href="contacto.php" title="¡Sumate a la iniciativa!">
                        <b>
                            <i class="fa fa-users" aria-hidden="true"></i> 
                            Unite a Brilla La Vida
                        </b>
                    </a>
                </div>
            </div>
            <br><br>
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_romina_blanco_nueva.jpg" alt="Romina Blanco">
                    <h5 class="team-name">Romina Blanco</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Fundadora y Lider de brilla la vida</h5>
                        <br>
                        <p style="font-size:.9em;">
            
                        <br> 
                        <!--
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        -->
                    </div>
                </div>
            </div>                                                                                                                                                                                 
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_foto_nueva3.jpg" alt="Eliana Ramos">
                    <h5 class="team-name">Eliana Ramos</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Community Mannager</h5>
                        <br>
                        <p style="font-size:.9em;">
            
                        <br> 
                    </div>
                </div>
            </div> 
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_foto_nueva2.jpg" alt="Sofia Vidueiro">
                    <h5 class="team-name">Sofia Vidueiro</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Community Mannager</h5>
                        <br>
                        <p style="font-size:.9em;">
            
                        <br> 
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_Dorka_Tirado.png" alt="Dorka Tirado">
                    <h5 class="team-name">Dorka Tirado</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Community Mannager</h5>
                        <br>
                        <p style="font-size:.9em;">
            
                        <br> 
                    </div>
                </div>
            </div> 
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_Mariana_Urdaniz.jpeg" alt="Mariana Urdaniz">
                    <h5 class="team-name"> <br> Mariana Urdaniz</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Redactora publicitaria y agente de Marketing digital para Web Brilla</h5>
                        <br>
                        <p style="font-size:.9em;">

                        </p>	
                        <br>
                    </div>
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
                            <p class="text-vision-mision">Un mundo más equitativo, igualitario e inclusivo es posible si unimos recursos y aportamos esfuerzos dentro de un marco de cooperación mutua.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about_content text-center">
							<h1>Misión</h1>
                            <p class="text-vision-mision">Buscamos que la educación sea un recurso accesible para todas las personas porque consideramos que es una herramienta que puede cambiar el mundo.</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('shared/testimonios.php'); ?>   

        <?php include('shared/contact.php'); ?>
		
        <?php include('shared/footer.php'); ?>
				 
		<?php include('shared/scripts.php'); ?>
        																				
    </body>
</html>