<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Contacto");    
      $header->setDescription("¿Tenés alguna pregunta o sugerencia?");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">  
        
        <?php include("shared/menu.php"); ?>
		
        <?php 
            $top_icon = 'fa-envelope';
            $top_title = 'Contacto';
            include("shared/section-top.php"); 
        ?>
        
		<div id="map"></div>        		
		<section class="footer_contact_area section-padding">
			<div class="container-fluid">
				<div class="row">	
					<div class="section-title text-center wow zoomIn">
						<h2>¡No dudes en escribirnos!</h2>
						<span></span>						
					</div>									
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<div class="footer_contact">
							<form id="contact-form" method="post" enctype="multipart/form-data" action="models/sendemail.php">
								<div class="row">                                    
                                    <div class="status alert alert-info" style="display: none">
                                      <strong>Enviando correo...</strong>
                                    </div>
                                    <div class="status alert alert-success" style="display: none">
                                      <strong style="margin-right: 5px;">Enviado!</strong>Su mensaje fue enviado correctamente.
                                    </div>
                                    <div class="status alert alert-danger" style="display: none">
                                      <strong style="margin-right: 5px;">Error!</strong><span id="message"></span>
                                    </div>                                    
									<div class="form-group col-md-12">
										<input type="text" name="name" class="form-control" id="first-name" placeholder="Nombre" required="required">
									</div>
                  <div class="form-group col-md-12">
										<input type="text" name="business" class="form-control" id="business" placeholder="Empresa">
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="Correo electronico" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="tel" name="phone" class="form-control" id="phone" placeholder="telefono" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="message" class="form-control" id="description" placeholder="Tu mensaje"></textarea>
									</div>                                    
                                    <div class="form-group col-md-12">
										<div class="g-recaptcha" data-sitekey="6LcwYj4UAAAAAIx5eW4atSIi2wIbc9Ue2slGmkw3"></div>
									</div>                                                                                                            
									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Enviar mensaje" name="submit" id="submitButton" class="btn  btn-contact-bg" title="Enviar mensaje!" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php include('shared/contact.php'); ?>
		
        <?php include('shared/footer.php'); ?>
				 
		<?php include('shared/scripts.php'); ?>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
        
        <script type="text/javascript">
            
            function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(-34.670756, -58.562751)
              };
              var map = new google.maps.Map(document.getElementById('map'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                icon: 'assets/img/map_pin.png',
                map: map
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);	
            
            // Contact form
            var $formContact = $('#contact-form');
            $formContact.submit(function(event){
                event.preventDefault();
                                                
                var $this = $(this);

                $('div.status.alert.alert-info').hide();
                $('div.status.alert.alert-success').hide();
                $('div.status.alert.alert-danger').hide();

                var data = {
                        'name': $this.find('input[name=name]').val(),
                        'bussines': $this.find('input[name=bussines]').val(),
                        'email': $this.find('input[name=email]').val().trim(),
                        'phone': $this.find('textarea[name=phone]').val().trim(),                        
                        'message': $this.find('textarea[name=message]').val().trim(),
                        'recaptcha': grecaptcha.getResponse(),
                };

                $.ajax({
                    url: $this.attr('action'),
                    type: 'POST',
                    data: data,
                    beforeSend: function(){
                        $('div.status.alert.alert-info').show();
                    }
                })
                .done(function(data){
                    $('div.status.alert.alert-info').hide();
                    switch (data.type) {
                        case 'success':
                                $('div.status.alert.alert-success').show().delay(3000).fadeOut('slow','swing');
                                $formContact.closest('form').find('input[type=text], input[type=email], textarea').val('');
                            break;
                        default:
                                var $alert = $('div.status.alert.alert-danger');
                                $alert.find('#message').html(data.message);
                                $alert.show().delay(3000).fadeOut('slow','swing', function(){
                                        $this.find('#message').html('');
                                });
                    }
                    grecaptcha.reset();
                });
            });
            
            
        </script>
    </body>
</html>