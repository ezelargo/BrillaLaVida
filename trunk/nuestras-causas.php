<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Nuestras causas");    
      $header->setDescription("El compromiso es nuestra base para cumplir con los objetivos y reconocer las necesidades de la sociedad.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
				        
        <?php 
            $top_icon = 'fa-heart';
            $top_title = 'Nuestras causas';
            include("shared/section-top.php"); 
        ?>
        
        <section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>El compromiso es nuestra base para cumplir con los objetivos y reconocer las necesidades de la sociedad.</h2>
						<span></span>
					</div>					                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h1>Brilla en los hospitales</h1>
							<p style="margin-left: 10px;">
							Todo ser humano tiene derecho a una atención hospitalaria digna y cuidada, por eso cuando en los hospitales o asistencias sociales los insumos son escasos esto atenta contra el derecho de las personas de recibir una atención justa. Brilla encuentra la manera de solventar y ayudar en estos casos para nutrir de los insumos y productos que hagan falta para garantizar un nacimiento digno, una rehabilitación con las herramientas que corresponden y una atención respetuosa de la salud de las personas.</p>
						</div>
                    </div>                               
				</div>
                <br>
                <div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h1>Brilla y la educación</h1>
							<p style="margin-left: 10px;">
							La educación es la herramienta más poderosa para generar cambios desde la paz, una capacitación de calidad y disponible para todos es necesaria para alcanzar una sociedad equitativa y justa. Es por eso que en Brilla nos esforzamos por convocar profesionales que quieran dar charlas, capacitaciones, entrevistas que puedan enriquecer y aportar valor a personas en situación de búsqueda laboral o que requieran formación académica para acceder a puestos de trabajo.</p>
						</div>
                    </div>                   
				</div>
				<div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h1>Brilla en el deporte</h1>
							<p style="margin-left: 10px;">
							Somos conscientes de los beneficios que genera el deporte y tener un espacio común donde entablar relaciones sociales en la vida de las personas, por eso desde Brilla queremos difundir las bondades de la actividad física y los efectos positivos tanto en niños como en adultos.
							<br><br>
							Con nuestros voluntarios propiciamos encuentros en donde se pueda crear un espacio de juego interactivo y pedagógico que nutra el autoestima, el cuidado personal y la relación sana y respetuosa con el prójimo. Los clubes barriales necesitan tu apoyo para continuar con su labor social, unite a nosotros y hagamos crecer tu club.</p>
						</div>
                    </div>                   
				</div>
				<div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h1>Brilla con los emprendedores</h1>
							<p style="margin-left: 10px;">
							Emprender significa arriesgar, vencer los miedos y lanzarse a transitar por un camino desconocido, pero qué bueno es hacerlo con las herramientas y la compañía adecuada. En Brilla queremos acompañarte y capacitarte para que el temor a lo desconocido pueda mermar y comiences a vivir la vida desde tu propósito. 
                        <br><br>
						El aprendizaje de nuevas habilidades, el uso de plataformas y maneras de comunicar tu emprendimiento son muy necesarias para el futuro próspero de tu negocio, estamos felices de que emprendas ese camino con nosotros y la guía de nuestros formadores voluntarios.</p>
						</div>
                    </div>                   
				</div>
				<div class="row" style="margin-top: 20px;">									                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
					 	<div class="about_content">
							<h1>Brilla capacita</h1>
							<p style="margin-left: 10px;">
							Nuestra directora está en constante búsqueda de profesionales que quieran contribuir con nuestro equipo dando charlas de capacitación, webinars, conferencias presenciales y virtuales donde se abordan temas como:
                        <br><br>
						“Cómo crear tu curriculum adecuadamente”
						<br><br>
						“Gestión de emociones en una entrevista laboral”
						<br><br>
						“ Crear tu perfil de Linkedln más atractivo” y más temas que pueden encontrar en nuestra cuenta de Instagram.</p>
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
                            Quiero adherir a una causa social
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