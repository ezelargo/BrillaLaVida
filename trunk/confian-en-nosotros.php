<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Confían en nosotros");    
      $header->setDescription("Empresas que confían en nosotros.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
        
        <?php         
            $top_icon = 'fa-heart';
            $top_title = 'Confían en nosotros';
            include("shared/section-top.php"); 
        ?>
        
        <section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Estancia La Candelaria</h2>
						<span></span>
					</div>					                   
                   <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about_content">						    
                            <p>Gracias a la confianza de la estancia y  la donación de vouchers que realizo en el año 2017 pudimos recaudar fondos destinados a los gastos de la organización.</p>
                            <br>                                                        
                            <div class="row text-center">
                                <a class="btn btn-light-bg" href="https://www.facebook.com/EstanciaLaCandelaria/" target="_blank" title="Ir al Facebook de Estancia la Candelaria">
                                    <b>
                                        <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> 
                                        Estancia La Candelaria
                                    </b>
                                </a>
                            </div>
                            <br>                                                      
                        </div>
                   </div>
                   <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about-slide">
							<img src="assets/img/empresas/brilla_la_vida_empresa_estancia_la_candelaria.jpg" alt="Estancia La Candelaria">
						</div>
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