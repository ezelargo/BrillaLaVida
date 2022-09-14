<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Página no encontrada");    
      $header->setDescription("Brilla la Vida es una organización sin fines de lucro formada por estudiantes con muchas ganas de ayudar y cambiar la realidad de muchas personas.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
        
        <?php 
            $top_icon = 'fa-frown-o';
            $top_title = 'Página no encontrada';
            include("shared/section-top.php"); 
        ?>
        
		<section id="pagina-no-encontrada" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Lo sentimos, la página que intenta visualizar ya no existe o se encuentra en mantenimiento, intente nuevamente en unos minutos...</h2>						
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