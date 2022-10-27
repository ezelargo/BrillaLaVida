<!-- START PRELOADER -->
<div class="preloader">
    <div class="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->	

<!-- START COLOR -->	
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_one"></div>
        </div><!--- END COL -->		
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_two"></div>
        </div><!--- END COL -->		
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_three"></div>
        </div><!--- END COL -->		
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_four"></div>
        </div><!--- END COL -->		
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_five"></div>
        </div><!--- END COL -->		
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_six"></div>
        </div><!--- END COL -->				  
    </div><!--- END ROW -->
</div><!--- END CONTAINER -->
<!-- END COLOR -->	

<!-- START HEADER -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="top-info-left">
                    <ul>
                        <li><i class="fa fa-phone"></i><a href="mailto:brillalavidaorganizacion@gmail.com">brillalavidaorganizacion@gmail.com</a></li>
                        <li><i class="fa fa-phone"></i>Muy pronto lo tendremos</li>
                        <li><i class="fa fa-clock-o"></i>Lun a Vie de 9 a 18 Hs</li>
                    </ul>
                </div>
            </div>
            <!--
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="top-info-right">
                    <ul class="list-unstyled">
                        <li><a href="#openModal">Login</a></li>
                        <li>or</li>
                        <li><a href="#openModaltwo">Register</a></li>
                    </ul>
                </div>
            </div>
            -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</header>
<!-- START HEADER -->

<!--- START POPUP TAB ONE  -->
<div id="openModal" class="modalbg">
  <div class="dialog">
        <a href="#close" title="Close" class="close">X</a>
        <div class="single_project_popup">
            <div class="login">
                <h4 class="login_register_title">Already a member? Sign in here</h4>
                <div class="form-group">
                    <input type="text" class=" form-control requiredField input-label" placeholder="Username" name="name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control requiredField input-label" placeholder="Enter Password" name="password" >
                </div>
                <div class="form-group mbnone">
                    <button class="btn btn-popup-bg" type="submit" name="submit">login</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- END POPUP TAB ONE  -->

<!--- START POPUP TAB TWO  -->
<div id="openModaltwo" class="modalbg">
  <div class="dialog">
        <a href="#close" title="Close" class="close">X</a>
        <div class="single_project_popup">
            <div class="register">
                    <h4 class="login_register_title">Create a new account:</h4>
                    <div class="form-group">
                        <input type="text" class=" form-control requiredField input-label" placeholder="Username" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text"  class=" form-control requiredField input-label" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control requiredField input-label" placeholder="Enter Email" name="email" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control requiredField input-label" placeholder="Enter Password" name="password" >
                    </div>
                    <div class="form-group mbnone">
                        <button class="btn btn-popup-bg" type="submit" name="submit">signup now</button>
                    </div>
                </div>
        </div>
    </div>
</div>
<!--- END POPUP TAB TWO  -->

<!-- START NAVBAR -->
<div class="navbar navbar-default menu-top menu_dropdown">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">
                <img src="assets/img/logo/brilla_la_vida_logo_nuevo1.png" alt="logo">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="index.php">
                        <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                        <!-- <ul class="sub-menu">
                                <li><a href="index_video.html">Home Video</a></li>
                            </ul>-->
                    </li>
                    <li><a class="page-scroll" href="sobre-nosotros.php">Conocenos</a>
                        <ul class="sub-menu">
                            <li><a class="page-scroll" href="que-hacemos.php">¿Qué hacemos?</a></li>
                            <li><a  class="page-scroll" href="quienes-somos.php"><i class="fa fa-users" aria-hidden="true"></i>¿Quienes somos?</a></li>
                        </ul>
                    </li>						
                    <li><a class="page-scroll" href="nuestra-historia.php">Nuestra historia</a></li>
                    <li><a class="page-scroll" href="formar-parte-de-brilla-la-vida.php">Sé voluntari@</a></li>
                    <li><a class="page-scroll" href="nuestras-causas.php">Nuestras causas</a></li>
                    <li><a class="page-scroll" href="cambia-tu-entorno.php">Cambia tu entorno</a></li>

                    <li><a class="page-scroll" href="contacto.php">Contacto</a></li>
                    <!--
                        <li><a class="page-scroll" href="service.html">Service</a></li>						
                        <li><a class="page-scroll" href="gallery.html">Gallery</a></li>													
                        <li><a class="page-scroll" href="event.html">Event</a></li>												
                        <li><a class="page-scroll" href="contact.html">Contact</a></li>
                    -->
                </ul>
            </nav>
        </div> 
    </div><!--- END CONTAINER -->
</div> 
<!-- END NAVBAR -->