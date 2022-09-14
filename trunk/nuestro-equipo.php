<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Nuestro Equipo");    
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
                <h2>Nuestro Equipo</h2>
                <span></span>
                <p>Formado por profesionales y estudiantes que muestran su interés por la causa, esta organización comenzó a tomar vida gracias a la colaboración de mucha gente y con gran éxito, <b>Brilla la vida</b> sigue creciendo.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_romina_blanco.jpg" alt="Romina Blanco">
                    <h5 class="team-name">Romina Blanco</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Responsable de Recursos Humanos, comunicación y relaciones institucionales.</h5>
                        <br>
                        <p style="font-size:.9em;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Estudiante de Relaciones Laborales en la Universidad de la Matanza.</p>
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
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_lucas_blanco.jpg" alt="Lucas Blanco">
                    <h5 class="team-name" style="background-color: #0999a7;">Lucas Blanco</h5>
                    <div class="team-hover" style="background-color: #0999a7;">
                        <h5 style="font-size:.9em;">Organizador de eventos</h5>
                        <br>
                        <p style="font-size:.9em;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Estudiante de la Tecnicatura en Organización de Eventos en Fundación de Alto Estudios.
                        </p>	
                        <br>
                    </div>
                </div>
            </div>                                                                                                                                                     
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_brian_canete.jpg" alt="Brian Cañete">
                    <h5 class="team-name" style="background-color: #0999a7;">Brian Cañete</h5>
                    <div class="team-hover" style="background-color: #0999a7;">
                        <h5 style="font-size:.9em;">Coordinador de Comunicación</h5>
                        <br>
                        <p style="font-size:.9em;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Estudiante de Lic. Comunicación Social en la Universidad de la Matanza.
                        </p>	
                        <br>
                    </div>
                </div>
            </div>                    
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_damian_totera.jpg" alt="Damian Totera">
                    <h5 class="team-name" style="background-color: #0999a7;">Damian Totera</h5>
                    <div class="team-hover" style="background-color: #0999a7;">
                        <h5 style="font-size:.9em;">Analista contable</h5>
                        <br>
                        <p style="font-size:.9em;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Licenciado en Administración de Empresas
                        </p>	
                        <br>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6">
                <div class="single_team"> 
                    <img class="img-responsive" src="assets/img/team/brilla_la_vida_soledad_sciutto.jpg" alt="Soledad Sciutto">
                    <h5 class="team-name">Soledad Sciutto</h5>
                    <div class="team-hover">
                        <h5 style="font-size:.9em;">Analista de Comunicación</h5>
                        <br>
                        <p style="font-size:.9em;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Estudiante de Relaciones Públicas en la Universidad de Moron
                        </p>	
                        <br>
                    </div>
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