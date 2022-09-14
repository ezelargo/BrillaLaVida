<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
<meta http-equiv="refresh" content="15;index.php" />
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Muchas gracias por tu donación");    
      $header->setDescription("Brilla la Vida es una organización sin fines de lucro formada por estudiantes con muchas ganas de ayudar y cambiar la realidad de muchas personas.");
      include("shared/header.php");      
    ?>	
            
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
        
        <?php 
            $top_icon = 'fa-smile-o';
            $top_title = 'Muchas Gracias!!';
            include("shared/section-top.php"); 
        ?>
        
		<section id="muchas-gracias-por-donacion" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>
                            Gracias a tu donación podremos incorporar elementos y herramientas tecnológicas necesarias para que los pacientes logren generar un cambio en sus vidas.
                        </h2>						
					</div>					                   
				</div>
			</div>
		</section>			
                        
        <section id="objetivos-brilla-la-vida" class="pricing_table section-padding">
			<div class="container">
				<div class="row text-center">
                    <a class="btn btn-light-bg" href="nuestras-causas.php" title="Mira nuestras causas">
                        <b>
                            <i class="fa fa-heart" aria-hidden="true"></i> 
                            ¡Nuestros objetivos!
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