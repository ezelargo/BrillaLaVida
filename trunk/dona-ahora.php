<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">
   <?php
      require_once("models/header.class.php");
      $header = new Header();
      $header->setTitle("Realiza tu donación ahora");    
      $header->setDescription("Con tu ayuda podremos incorporar elementos y herramientas tecnológicas necesarias para los pacientes y comenzar a generar un cambio en sus vidas.");
      include("shared/header.php");
      ?>	
    <body data-spy="scroll" data-offset="80">        		
	
        <?php include("shared/menu.php"); ?>
					        
        <?php 
            $top_icon = 'fa-heart';
            $top_title = 'Dona ahora';
            include("shared/section-top.php"); 
        ?>
				
		<section id="about" class="about_us section-padding">
			<div class="container">
				<div class="row">					                    
                   <div class="section-title text-center">
						<h2>Realiza tu donación ahora.</h2>
						<span></span>
				   </div>					                                                           
                   <div class="col-md- col-sm-12 col-xs-12">
						<div class="about_content">
							<h1>Sumate a nuestras causas con tu donación.</h1>
							<p>Lanzamos esta plataforma para contribuir de forma solidaria en el equipamiento y compra de insumos para el Hospital Ramos Mejía de Balvanera.</p>
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
                                <p style="font-size: 1.2em;">
                                    Con tu colaboración podremos incorporar insumos e equipamientos con mayor tecnología necesarios para mejorar la atención a los pacientes. Tu aporte solidario nos permitirá, que los Servicios Dermatología, enfermería, Neonatología, Maternidad y Cardiología sigan creciendo y ayudando en la salud de los que más necesitan.
                                </p>                            
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
						<h2>Los datos de tu donación se mantendrán seguros gracias a <a href="https://www.mercadopago.com.ar" target="_blank">Mercado Pago</a></h2>
					</div>
					<div class="col-sm-12 col-md-12">				   
					   <div class="plan  first">
						  <div class="head head_color_one">
                               <h3 style="font-size: 1.3em; text-transform: none;">
                                   Con el objetivo de lograr transparencia a continuación se detallan los diferentes materiales y presupuestos que forman parte de nuestra investigación y que son
                                   necesarios para los pacientes de diferentes sectores del hospital Ramos Mejia de la Ciudad de Buenos Aires.
                              </h3>
                          </div> 						  
						  <ul class="item-list">
							  <li>
                                  <i class="fa fa-file" aria-hidden="true"></i>
                                  <a href="presupuestos/Dermatologia_20180717_01_PR-0001-00020488.pdf" target="_blank" style="color: #333">
                                       Presupuesto Dermatología Nro 00020488 del 17/07/2018 
                                  </a>                                  
                              </li>
                              <li>
                                  <i class="fa fa-file" aria-hidden="true"></i>
                                  <a href="presupuestos/Dermatologia_20180717_02_PR-0001-00020489.pdf" target="_blank" style="color: #333">
                                       Presupuesto Dermatología Nro 00020489 del 17/07/2018
                                  </a>                                  
                              </li>
                              <li style="font-size:1.2em;">
                                    <b>Servicio de Dermatología</b> - <a style="color: blue;" target="_blank" href="https://es.wikipedia.org/wiki/Luz_de_Wood">Luz de Wood</a><b style="font-size: .8em;">(1*)</b> $3.870,00
                              </li>
                              <li style="font-size:1.2em;">
                                  <b>Servicio de Cardiología</b> - Mascara facial de adulto para asistencia ventilatoria <b style="font-size: .8em;">(2*)</b> $20.000,00
                              </li>
                              <li style="font-size:1.2em;">
                                    <b>Servicio de Neonatología</b> - Balanza pediátrica electrónica $6.200,00
                              </li>
                              <li style="font-size:1.2em;">
                                    <b>Servicio de Neonatología</b> - Pediometro Pediatrico <b style="font-size: .8em;">(3*)</b> $1.800,00
                              </li>
                              <li style="font-size:1.2em;">
                                    <b>Servicio de Enfermeria</b> - Estufa Halogena Electrolux HAL 4OGF 1500w $1.700,00
                              </li>
                              <li style="font-size:1.2em;">
                                    <b>Servicio de Enfermeria y Maternidad</b> - 6 tensiómetros Melipal con estetoscopio $2.100,00
                              </li>                              
						  </ul>                             
                           <p style="font-size: .9em;"><b>(1*)</b> <i>La luz de Wood es una luz ultravioleta emitida por una lámpara de mercurio, cuya longitud de onda esta entre 400 y 450 mm, <br>que penetra hasta la dermis, y que sirve para el diagnóstico de algunas enfermedades pigmentarias, metabólicas e infecciones por hongos..</i></p>                           
                           <p style="font-size: .9em;"><b>(2*)</b> <i>Mascara facial de adulto para asistencia ventilatoria no invasiva.</i></p>
                           <p style="font-size: .9em;"><b>(3*)</b> <i>Pediometro es una regla grande que sirve para medir a los bebes.</i></p>                           
                           <br>
                           <hr>                           
                          <section class="footer_contact_area section-padding" style="padding-top: 15px !important; padding-bottom: 15px !important;">                                                                                          
                                <div class="container-fluid">
                                    <div class="row">	                                        
                                        <div class="section-title text-center wow zoomIn">                                                                                        
                                            <p><i class="fa fa-warning" aria-hidden="true"></i> 
                                            Como es de público conocimiento, la inflación por la cual esta atravesando el país puede afectar a los precios y presupuestos que se detallaron arriba, haremos todo lo posible para mantenerlos actualizados.</p>
                                            <span></span>						
                                            <a mp-mode="blank" href="https://www.mercadopago.com/mla/checkout/start?pref_id=317435171-6e9a94c9-93e3-458b-b14c-817454516c73" name="MP-payButton" class='green-ar-l-rn-none'>Dona $100</a>
                                            <a mp-mode="blank" href="https://www.mercadopago.com/mla/checkout/start?pref_id=317435171-56590570-2f67-4dda-a6df-07ec88baca6e" name="MP-payButton" class='green-ar-l-rn-none'>Dona $200</a>
                                            <a mp-mode="blank" href="https://www.mercadopago.com/mla/checkout/start?pref_id=317435171-cf99a460-05bf-4d37-84c1-bbc915361a7e" name="MP-payButton" class='green-ar-l-rn-none'>Dona $400</a>
                                            <br>
                                            <a mp-mode="blank" href="https://www.mercadopago.com/mla/checkout/start?pref_id=317435171-aa508fc9-72c0-402d-b183-91caff1a1848" name="MP-payButton" class='green-ar-l-rn-none'>Dona $600</a>
                                            <a mp-mode="blank" href="https://www.mercadopago.com/mla/checkout/start?pref_id=317435171-67a63e06-32e6-4930-a4a5-bd6df611ed18" name="MP-payButton" class='green-ar-l-rn-none'>Dona $800</a>
                                            <a mp-mode="blank" href="https://www.mercadopago.com/mla/checkout/start?pref_id=317435171-28569b0c-218d-41c3-919e-f8edd1f6501c" name="MP-payButton" class='green-ar-l-rn-none'>Dona $1000</a>                                                                                                                                                                                
                                            <br><br><br>
                                            <a href="https://www.mercadopago.com" target="_blank">
                                                <img src="assets/img/mercadopago/version-horizontal-small.png"/>
                                            </a>
                                            
                                        </div>									                                                                                
                                    </div>
                                </div>
                          </section>                                                          
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ATOQH5jqO14?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dusLTyqxxbk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           <br> 
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/xwe0Lm36lR4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                     
					   </div>					 					
					</div>
				</div>
			</div>
		</section>
                                                                                  
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
            (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
        </script>
        
        <script type="text/javascript">            
            
        </script>        
        																				
    </body>
</html>