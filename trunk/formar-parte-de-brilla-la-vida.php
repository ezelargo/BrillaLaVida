<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Sé voluntari@");    
      $header->setDescription("Si sos estudiante universitario, te recibiste y querés tener experiencia de campo o simplemente te gusta colaborar y te apasiona nuestra causa social unite a nuestro equipo y formá parte de Brilla. 
      .");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
					        
        <?php 
            $top_icon = 'fa-users';
            $top_title = 'Sé voluntari@';
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
							<h2>Beneficio exclusivo para Voluntarios:</h2><br>
							<p>Todos <b>nuestros colaboradores cuentan con el beneficio de acceder gratuitamente a un programa de liderazgo</b>  donde recibirán capacitaciones de oratoria/coaching/ trato con el público/ gestión de problemáticas laborales/ gestión de emociones en presentaciones y demás temáticas de vital importancia para el crecimiento personal.
                            <br><br>
                            Nuestro mayor recurso son los voluntarios, sin ellos no sería posible todo lo que hemos logrado por ello buscamos expandirnos y sumar cada día más personas que quieran unirse a nuestra razón de ser y ayudarnos a multiplicar beneficiarios.
                            <br><br>
                            razón de ser y ayudarnos a multiplicar beneficiarios.
                            Todos pueden aportar desde sus capacidades, todos tenemos algo que nos hace únicos y valiosos, hay mucha gente que te necesita y a la que podés cambiarle la vida, siendo de guía, apoyo y compañía a la vez que ganás experiencia y tomás confianza al  hablar en público, transmitir tus ideas y ponés en práctica todo lo que aprendiste en tu carrrera.</p>
						    <br><br>
                        </div>
                    </div>                   
				</div>
			</div>                    
		</section>
        <section class="section-padding">
			<div class="container">
				<div class="row cold-md- col-sm-12 col-xs-12">
                    <a class="btn btn-light-bg" href="contacto.php" title="¡Sumate a la iniciativa!">
                        <b>
                          Impactemos juntos en la vida de otros para transformar la sociedad.
                        </b>
                    </a>
                </div>
            </div>
        </section>
        <section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">					                  					                                                           
                   <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="about_content">
                        <img src="assets/img/socials/brilla_la_vida_dr_Oxilia4.png" alt="Dr Oxilia">
                        <br><br>
                        <p>Así lo hizo el doctor Mario Oxilia dermatólogo del  Hospital Ramos Mejía, uno de los más importantes del país,</p>
                         <p>dio una charla abierta sobre problemas de piel y métodos anticonceptivos muy beneficiosa para la comunidad.</p>
                        <br><br>
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
                            Inscribite y aportá tu conocimiento
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