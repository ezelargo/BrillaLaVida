<?php

function bornomala_shop_banner(){ 
global $bornomala;
$bornomala_home_bg_color = $bornomala['bornomala_home_bg_color'];	
?>


<!-- START  HOME DESIGN -->
<section class="section-top" style="background-color: <?php echo esc_attr($bornomala_home_bg_color);?>">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="section-top-title">
				<h2><?php esc_html_e('Shop' , 'bornomala');?></h2>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'bornomala');?></a></li>
			  <li class="active"><?php esc_html_e('Shop' , 'bornomala');?></li>
			</ol>
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END  HOME DESIGN -->
		
<div class="clearfix"></div>	
		
<?php }

function bornomala_blog_banner(){ 
global $bornomala;
$bornomala_home_bg_color = $bornomala['bornomala_home_bg_color'];	
?>


<!-- START  HOME DESIGN -->
<section class="section-top" style="background-color: <?php echo esc_attr($bornomala_home_bg_color);?>">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="section-top-title">
				<h2><?php esc_html_e('Blog' , 'bornomala');?></h2>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'bornomala');?></a></li>
			  <li class="active"><?php esc_html_e('Blog' , 'bornomala');?></li>
			</ol>
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END  HOME DESIGN -->
		
<div class="clearfix"></div>	
		
<?php }


function bornomala_archive_banner(){ 
global $bornomala;
$bornomala_home_bg_color = $bornomala['bornomala_home_bg_color'];	
?>

	
<!-- START  HOME DESIGN -->
<section class="section-top" style="background-color: <?php echo esc_attr($bornomala_home_bg_color);?>">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="section-top-title">
				<h2><?php esc_html_e('Archive' , 'bornomala');?></h2>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'bornomala');?></a></li>
			  <li class="active"><?php the_archive_title();?></li>
			</ol>
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END  HOME DESIGN -->	

<div class="clearfix"></div>	
		
<?php }

function bornomala_search_banner(){ 
global $bornomala;
$bornomala_home_bg_color = $bornomala['bornomala_home_bg_color'];	
?>


<!-- START  HOME DESIGN -->
<section class="section-top" style="background-color: <?php echo esc_attr($bornomala_home_bg_color);?>">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="section-top-title">
				<h2><?php esc_html_e('Search' , 'bornomala');?></h2>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'bornomala');?></a></li>
			  <li class="active"><?php printf( esc_html__( 'Search Results for: %s', 'bornomala' ), '<span>' . get_search_query() . '</span>' ); ?></li>
			</ol>
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END  HOME DESIGN -->	
	
<div class="clearfix"></div>
		
<?php }

function bornomala_404_banner(){ 
global $bornomala;
$bornomala_home_bg_color = $bornomala['bornomala_home_bg_color'];	
?>

<!-- START  HOME DESIGN -->
<section class="section-top" style="background-color: <?php echo esc_attr($bornomala_home_bg_color);?>">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="section-top-title">
				<h2><?php esc_html_e('404' , 'bornomala');?></h2>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'bornomala');?></a></li>
			  <li class="active"><?php esc_html_e('404' , 'bornomala');?></li>
			</ol>
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END  HOME DESIGN -->	

<div class="clearfix"></div>
	
<?php }

function bornomala_single_banner(){ 
global $bornomala;
$bornomala_home_bg_color = $bornomala['bornomala_home_bg_color'];	
?>

<!-- START  HOME DESIGN -->
<section class="section-top" style="background-color: <?php echo esc_attr($bornomala_home_bg_color);?>">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="section-top-title">
				<h2><?php the_title();?></h2>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'bornomala');?></a></li>
			  <li class="active"><?php the_title();?></li>
			</ol>
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END  HOME DESIGN -->	

<div class="clearfix"></div>	
		
<?php }

function bornomala_header(){ 

	global $bornomala;
	$bornomala_preloader_opt =  $bornomala['bornomala_preloader_opt'];
	$bornomala_homepage_opt =  $bornomala['bornomala_homepage_opt'];
	$bornomala_top_opt =  $bornomala['bornomala_top_opt'];
	$bornomala_email_address =  $bornomala['bornomala_email_address'];
	$bornomala_phone_number =  $bornomala['bornomala_phone_number'];
	$bornomala_time =  $bornomala['bornomala_time'];
	$bornomala_default_logo_img = get_template_directory_uri() . '/assets/img/logo.png';	
?>

	<?php if($bornomala_preloader_opt == '1' && !$bornomala_homepage_opt == '1') { ?>
		
		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->
	
	<?php }elseif($bornomala_preloader_opt == '1' && $bornomala_homepage_opt == '1'){ ?>	

	<?php if(is_front_page()) {?>
		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->
	<?php } } ?>
	
	
<?php if(!$bornomala_top_opt == true){ ?>

<!-- START COLOR -->	
<div class="container-fluid header_top">
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
					<?php if($bornomala_email_address){ ?>
						<li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo esc_url($bornomala_email_address);?>"><?php echo esc_html($bornomala_email_address);?></a></li>
					<?php } if($bornomala_phone_number){ ?>
						<li><i class="fa fa-phone"></i> <?php echo esc_html($bornomala_phone_number);?></li>
					<?php } if($bornomala_time){ ?>	
						<li><i class="fa fa-clock-o"></i> <?php echo esc_html($bornomala_time);?></li>
					<?php } ?>
					</ul>
				</div>
			</div><!--- END COL -->	
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="top-info-right">
					<ul class="list-unstyled">
						<?php if(is_user_logged_in()){ 
						 
						?>
							
							
						<?php }else{ ?>
						
							<li><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"><?php esc_html_e('Login' , 'bornomala');?></a></li>					
							<li><?php esc_html_e('or' , 'bornomala');?></li>
							<li><a href="<?php echo esc_url( wp_registration_url() ); ?>"><?php esc_html_e('Register' , 'bornomala');?></a></li>
					
						<?php } ?>
					</ul>
				</div>
			</div><!--- END COL -->				  
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</header>
<!-- START HEADER -->

<?php } ?>

<!-- START NAVBAR -->
<div class="navbar navbar-default menu-top menu_dropdown" <?php if($bornomala_top_opt == true){ ?> style="margin-top: 0;" <?php } ?>>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?php esc_html_e('Toggle navigation' , 'bornomala');?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand">
				<?php if(get_custom_logo()){
					 the_custom_logo();
				}else { ?>
				  <img src="<?php echo esc_url($bornomala_default_logo_img);?>" alt="">
				<?php } ?>		
			</a>
		</div>
		
		<div class="navbar-collapse collapse">
			<nav>
				<?php bornomala_main_menu();?>
			</nav>
		</div> 
	</div><!--- END CONTAINER -->
</div> 
<!-- END NAVBAR -->

<?php
	
}

function bornomala_footer(){ 
	global $bornomala;

	$bornomala_copywrite_text =  $bornomala['bornomala_copywrite_text'];
	$bornomala_footer_widget_option =  $bornomala['bornomala_footer_widget_option'];
	$bornomala_footer_fb_link = $bornomala['bornomala_footer_fb_link'];	
	$bornomala_footer_tw_link = $bornomala['bornomala_footer_tw_link'];	
	$bornomala_footer_gplus_link = $bornomala['bornomala_footer_gplus_link'];	
	$bornomala_footer_linkedin_link = $bornomala['bornomala_footer_linkedin_link'];	
	$bornomala_footer_youtube_link = $bornomala['bornomala_footer_youtube_link'];	
	$bornomala_footer_skype_link = $bornomala['bornomala_footer_skype_link'];
	$bornomala_footer_instagram_link = $bornomala['bornomala_footer_instagram_link'];
		
if(!$bornomala_footer_widget_option == true){	

?>

<!-- START FOOTER TOP -->
<footer class="footer-top section-padding">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</footer>
<!-- END FOOTER TOP -->
<?php } ?>

<!-- START FOOTER BOTTOM -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 wow zoomIn">
				<p class="footer_copyright"><?php echo bornomala_wp_kses($bornomala_copywrite_text);?></p>				
			</div><!--- END COL -->
			<div class="col-md-6 col-sm-6 col-xs-12 wow zoomIn">
				<div class="footer_social">
					<ul>
						<?php if($bornomala_footer_fb_link){ ?>
							<li><a class="f_facebook wow bounceInDown" href="<?php echo esc_url($bornomala_footer_fb_link);?>"><i class="fa fa-facebook"></i></a></li>
						<?php } if($bornomala_footer_tw_link){ ?>
							<li><a class="f_twitter wow bounceInDown" data-wow-delay=".1s" href="<?php echo esc_url($bornomala_footer_tw_link);?>"><i class="fa fa-twitter"></i></a></li>
						<?php } if($bornomala_footer_gplus_link){ ?>
							<li><a class="f_google wow bounceInDown" data-wow-delay=".2s" href="<?php echo esc_url($bornomala_footer_gplus_link);?>"><i class="fa fa-gplus"></i></a></li>
						<?php } if($bornomala_footer_linkedin_link){ ?>
							<li><a class="f_linkedin wow bounceInDown" data-wow-delay=".3s" href="<?php echo esc_url($bornomala_footer_linkedin_link);?>"><i class="fa fa-linkedin"></i></a></li>
						<?php } if($bornomala_footer_youtube_link){ ?>
							<li><a class="f_youtube wow bounceInDown" data-wow-delay=".4s" href="<?php echo esc_url($bornomala_footer_youtube_link);?>"><i class="fa fa-youtube"></i></a></li>
						<?php } if($bornomala_footer_skype_link){ ?>
							<li><a class="f_skype wow bounceInDown" data-wow-delay=".5s" href="<?php echo esc_url($bornomala_footer_skype_link);?>"><i class="fa fa-skype"></i></a></li>
						<?php } ?>
					</ul>
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</footer>
<!-- END FOOTER BOTTOM-->	
		
<?php }