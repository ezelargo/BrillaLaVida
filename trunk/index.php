<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Bienvenidos a Brilla la vida");    
      $header->setDescription("Brilla la Vida es una organización sin fines de lucro formada por estudiantes con muchas ganas de ayudar y cambiar la realidad de muchas personas.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">

		<?php include("shared/menu.php"); ?>
				
		<section id="home" class="welcome-area">
			<div class="welcome-slider-area">
				<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators carousel-indicators-slider">
						<li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
						<li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="single-slide-item slide-1">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
                                                    <h2>Brilla la vidas</h2>
                                                    <p>Somos un grupo solidario con muchas ganas de ayudar y cambiar la realidad de muchas personas.</p>
													<div class="home_btn">
														<a href="sobre-nosotros.php" class="app-btn wow bounceIn page-scroll home_btn_color_two" data-wow-delay=".6s" >Sobre nosotros</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-2">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<h2>Valores que nos representan</h2>
												    <p>El compromiso es nuestra base para cumplir con los objetivos y reconocer necesidades de la sociedad.</p>
													<div class="home_btn">
														<a href="sobre-nosotros.php" class="app-btn wow bounceIn page-scroll home_btn_color_two" data-wow-delay=".6s" >Sobre nosotros</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-3">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
                                                    <h2>Juntos somos y hacemos más</h2>
												    <p>Unimos nuestros talentos y conocimientos para poder aportar nuestro granito de arena a la sociedad.</p>																										
													<div class="home_btn">
														<a href="sobre-nosotros.php" class="app-btn wow bounceIn page-scroll home_btn_color_two" data-wow-delay=".6s" >Sobre nosotros</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="promotion section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="single_promo">
							<h1>Bienvenidos a <strong>Brilla la vida</strong>.</h1>
						</div>
					</div>
				</div>
			</div>
		</section>


		 <section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="single_promo">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/wJRqyBqyAi8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
        <?php include('shared/valores.php'); ?>
        
         <section class="promotion section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="single_promo">
							<h1 style="font-size: 2.5em;">Sumate a nuestras causas con tu donación.</h1>
                            <div class="home_btn">
                                <a href="dona-ahora.php" style="border: 1px solid white !important;" class="app-btn wow bounceIn page-scroll home_btn_color_two" data-wow-delay=".6s" >
                                    ¡Dona Ahora!
                                </a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
        								               				
		<section id="event" class="our_event section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center wow zoomIn">
						<h2>Nuestras causas</h2>
						<span></span>
						<p>Somos un equipo unido por la solidaridad, tenemos como meta generar un cambio positivo en las diversas instituciones de nuestro país con las cuales trabajamos y elegimos para ayudar y acompañar <b>poniendo nuestras capacidades y conocimientos al servicio de las mismas</b>.</p>
					</div>	
				    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="9999999">                                                                                                
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="single_event">
										<img class="event-photo" alt="" src="assets/img/causas/brilla_la_vida_hospital_ramos_mejia_causa1_600x400.jpg"/>
										<div class="single_event_text">
											 <span>Año 2015</span>
											 <h4><a href="nuestras-causas.php">1er Causa Solidaria</a></h4>
											 <p>En nuestra primera causa solidaria, ayudamos al servicio de kinesiología del Hospital Ramos Mejía. Cumplimos nuestro objetivo: proveer de insumos al servicio.</p>
										</div>
									</div>
								</div>	
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="single_event">
										<img class="event-photo" alt="" src="assets/img/causas/brilla_la_vida_hospital_ramos_mejia_causa2_600x400.jpg"/>
										<div class="single_event_text">
											 <span>Año 2017</span>
											 <h4><a href="nuestras-causas.php">2da Causa Solidaria</a></h4>	
											 <p>El jefe del área de cardiología del Hospital Ramos Mejia, se comunicó con Brilla la vida para pedirnos ayuda y e informarnos sobre la falta de diversos insumos.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		          		          
        <style type="text/css">        
            .carousel-indicators li
            {
                border: 1px solid black !important; 
                height: 14px !important;
                width: 14px !important;                
            }
            
            .carousel-indicators .active
            {
                background-color: black !important;
                height: 14px !important;
                width: 14px !important;
            }            
        </style>
        
        <section class="testimonial section-padding" style="background-image: url(assets/img/bg/background.png);  background-size:cover; background-position: center center;">
	        <div class="container">
	            <div class="row">				
	                <div class="col-sm-10 col-sm-offset-1 col-xs-12">                    
                        <div class="text-center">                            
                            <div class="testimonial-text">
                                <p>Súmate a nuestro equipo de trabajo, envíanos tu Curriculum Vitae a </p>
                                <h4><a href="mailto:brillalavidarrhh@gmail.com" style="text-transform: lowercase; font-size:1.1em;">brillalavidarrhh@gmail.com</a></h4>
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