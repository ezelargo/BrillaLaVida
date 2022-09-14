<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Formar parte de Brilla");    
      $header->setDescription("Buscamos personas comprometidas con el prójimo, empáticos, que tenga la vocación de ayudar, capacidad para trabajar en equipo y ganas de crecer.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
					        
        <?php 
            $top_icon = 'fa-users';
            $top_title = 'Formar parte de Brilla la vida';
            include("shared/section-top.php"); 
        ?>
				
		<section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">					                    
                   <div class="section-title text-center">
						<h2>Trabajar en Brilla la vida es formar parte de un equipo muy humano.</h2>
						<span></span>
				   </div>					                                                           
                   <div class="col-md- col-sm-12 col-xs-12">
						<div class="about_content">
							<h1>Formar parte de nuestro equipo.</h1>
							<p>Si algo nos distingue es nuestros valores, donde los voluntarios son los protagonistas y actores principales para nuestro trabajo solidario.
                            Por eso buscamos personas comprometidas con el prójimo, empáticos, que tenga la vocación de ayudar, capacidad para trabajar en equipo y ganas de crecer.</p>
						</div>
                    </div>                   
				</div>
			</div>
		</section>			
        
        <section class="testimonial section-padding" style="background-image: url(assets/img/bg/background.png);  background-size:cover; background-position: center center;">
	        <div class="container">
	            <div class="row">				
	                <div class="col-sm-10 col-sm-offset-1 col-xs-12">                    
                        <div class="text-center">                            
                            <div class="testimonial-text">
                                <p style="font-size: 1em;">Nos encontramos incorporando estudiantes o graduados de las carreras Relaciones Públicas, Tecnicatura, ceremonial y protocolo, Organización integral de eventos, Marketing, Publicidad, Comunicación social, Administración de empresas y Contador público.</p>
                                <p style="font-size: 1em;">Profesionales con trayectoria que quieran sumarse para brindar asesoramiento a las áreas de nuestra organización: Recursos humanos, Eventos, Comunicación y Relaciones institucionales, Marketing y Contable.</p>                                
                            </div>                            
                        </div>						
					</div>				
				</div>
			</div>	
        </section>
        
        <section class="pricing_table section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="section-title">
						<h2>Nuestras busquedas</h2>
					</div>
					<div class="col-sm-12 col-md-12">				   
					   <div class="plan  first">
						  <div class="head head_color_one"><h3>Si sentís identificado y buscas un excelente clima laboral súmate a nuestro equipo.</h3></div> 						  
						  <ul class="item-list">
							  <li><i class="fa fa-user-plus" aria-hidden="true"></i> Community Manager</li>
							  <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Coordinador de Eventos</li>
                              <li><i class="fa fa-bullhorn" aria-hidden="true"></i> Coordinador de Comunicación y Relaciones institucionales</li>
                              <li><i class="fa fa-line-chart" aria-hidden="true"></i> Analista de Marketing</li>
                              <li><i class="fa fa-calculator" aria-hidden="true"></i> Analista Contable</li>
                              <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Abogado</li>
						  </ul>                           
                          <section class="footer_contact_area section-padding">
                                <div class="container-fluid">
                                    <div class="row">	
                                        <div class="section-title text-center wow zoomIn">
                                            <h2>Envianos tu Curriculum Vitae</h2>
                                            <span></span>						
                                        </div>									
                                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">                                                              
                                              <div class="footer_contact">
                                                   <form id="cv-form" method="post" enctype="multipart/form-data" action="models/sendcv.php">
                                                        <div class="row">
                                                            <div class="status alert alert-info" style="display: none">
                                                              <strong>Enviando CV...</strong>
                                                            </div>
                                                            <div class="status alert alert-success" style="display: none">
                                                              <strong style="margin-right: 5px;">Enviado!</strong>Su CV fue enviado correctamente.
                                                            </div>
                                                            <div class="status alert alert-danger" style="display: none">
                                                              <strong style="margin-right: 5px;">Error!</strong><span id="message"></span>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <input type="text" name="name" class="form-control" id="first-name" placeholder="Nombre y Apellido" required="required">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <input type="email" name="email" class="form-control" id="email" placeholder="Correo electronico" required="required">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <input type="file" name="file_cv" class="form-control" id="file_cv" accept=".doc,.docx,.ppt,.pptx,.pdf">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <div class="g-recaptcha" data-sitekey="6LcwYj4UAAAAAIx5eW4atSIi2wIbc9Ue2slGmkw3"></div>
                                                                <input type="text" name="recaptcha" class="form-control" id="g-recaptcha" style="display: none;">  
                                                            </div>                                                            
                                                        </div>
                                                   </form>
                                               </div>
                                        </div>                                                                                       
                                        <a id="enviarCv" class="btn btn-light-bg" href="##"><b><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> ¡Envianos tu CV ahora!</b></a>                                                                                                                                                                    
                                    </div>
                                </div>
                          </section>                                                          
					   </div>					 					
					</div>
				</div>
			</div>
		</section>
        
        <section class="testimonial section-padding" style="background-image: url(assets/img/bg/background.png);  background-size:cover; background-position: center center;">
	        <div class="container">
	            <div class="row">				
	                <div class="col-sm-10 col-sm-offset-1 col-xs-12">                    
                        <div class="text-center">                            
                            <div class="testimonial-text">
                                <p>También podes enviarnos tu Curriculum Vitae a</p>
                                <h4><a href="mailto:brillalavidarrhh@gmail.com" style="text-transform: lowercase; font-size:1.1em;">brillalavidarrhh@gmail.com</a></h4>
                            </div>                            
                        </div>						
					</div>				
				</div>
			</div>	
        </section>
                                                  
        <?php include('shared/portfolio.php'); ?>
        
        <section class="section_grey section-padding">
			<div class="container">
				<div class="row text-center">
                    <a class="btn btn-light-bg" href="nuestras-causas.php" title="Mira nuestras causas">
                        <b>
                            <i class="fa fa-heart" aria-hidden="true"></i> 
                            ¡Nuestros objetivos para el 2018!
                        </b>
                    </a>
                </div>
            </div>
        </section>
                                        
        <?php include('shared/contact.php'); ?>
		
        <?php include('shared/footer.php'); ?>
				 
		<?php include('shared/scripts.php'); ?>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
        <script type="text/javascript">            
            $(document).ready(function(){                
                function showError($message){
                    var $alert = $('div.status.alert.alert-danger');
                    $alert.find('#message').html($message);
                    $alert.show().delay(3000).fadeOut('slow','swing', function(){
                            $alert.find('#message').html('');
                    });
                }    

                $('#enviarCv').on('click',function(e){
                   e.preventDefault();
                   $('#cv-form').submit();                                               
                });

                var $formCv = $('#cv-form');
                $formCv.submit(function(event){
                    event.preventDefault();                                                
                    var $this = $(this);

                    $('div.status.alert.alert-info').hide();
                    $('div.status.alert.alert-success').hide();
                    $('div.status.alert.alert-danger').hide();

                    if(!document.getElementById('cv-form').checkValidity()){
                        showError('Por favor complete todos los campos.');
                        return;
                    }

                    var inputFileCv = $this.find('input[name=file_cv]').prop('files');
                    if(inputFileCv.length == 0){                    
                        showError('Por favor no olvide cargar su CV.');                                        
                        return;
                    }
                    
                    $this.find('input[name=recaptcha]').val(grecaptcha.getResponse());

                    var formData = new FormData(document.getElementById('cv-form'));                
                    formData.append('file_cv',inputFileCv[0]);    

                    $.ajax({
                        url: $this.attr('action'),
                        type: 'POST',
                        data: formData,
                        contentType:false,                        
                        processData:false,
                        cache:false,
                        beforeSend: function(){
                            $('div.status.alert.alert-info').show();
                        }
                    })
                    .done(function(data){
                        $('div.status.alert.alert-info').hide();
                        switch (data.type) {
                            case 'success':
                                    $('div.status.alert.alert-success').show().delay(3000).fadeOut('slow','swing');
                                    $formCv.closest('form').find('input[type=text], input[type=file], input[type=email], textarea').val('');
                                break;
                            default:
                                showError(data.message);                                    
                        }
                        grecaptcha.reset();
                    });
                });                
            });            
        </script>        
        																				
    </body>
</html>