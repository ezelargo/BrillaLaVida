<?php 
function bornomala_movers_custom_css(){
	global $bornomala;
	
	if(!is_admin()) :
	?>
   <!-- Custom Stylesheet -->
 <style type="text/css">

  
	<?php 
	
		$bornomala_theme_color					 = '';
		$bornomala_top_bg_color					 = '';
		$bornomala_top_text_color					 = '';
		$bornomala_top_icon_bg_color					 = '';
		$bornomala_top_icon_color					 = '';
		$bornomala_menu_text_color					 = '';
		$bornomala_menu_bg_color			= '';
		$bornomala_menu_text_hover_color			= '';	
		$bornomala_sub_menu_bg_color			= '';	
		$bornomala_sub_menu_text_color			= '';	
		$bornomala_preloader_bg_color			= '';	
		$bornomala_spinner_color						 = '';
		$bornomala_spinner_bgcolor						 = '';		
		$bornomala_footer_bg_color			= '';
		$bornomala_footer_text_color			= '';
		$bornomala_footer_link_color			= '';
		
					
		
		if ( isset( $bornomala['bornomala_theme_color'] ) ) {
			$bornomala_theme_color = $bornomala['bornomala_theme_color'];
		}			
		
		if ( isset( $bornomala['bornomala_top_bg_color'] ) ) {
			$bornomala_top_bg_color = $bornomala['bornomala_top_bg_color'];
		}			
		
		if ( isset( $bornomala['bornomala_top_text_color'] ) ) {
			$bornomala_top_text_color = $bornomala['bornomala_top_text_color'];
		}			
		if ( isset( $bornomala['bornomala_top_icon_bg_color'] ) ) {
			$bornomala_top_icon_bg_color = $bornomala['bornomala_top_icon_bg_color'];
		}		
		if ( isset( $bornomala['bornomala_top_icon_color'] ) ) {
			$bornomala_top_icon_color = $bornomala['bornomala_top_icon_color'];
		}			
		if ( isset( $bornomala['bornomala_menu_text_color'] ) ) {
			$bornomala_menu_text_color = $bornomala['bornomala_menu_text_color'];
		}				
		
		if ( isset( $bornomala['bornomala_menu_bg_color'] ) ) {
			$bornomala_menu_bg_color = $bornomala['bornomala_menu_bg_color'];
		}			
		
		if ( isset( $bornomala['bornomala_menu_text_hover_color'] ) ) {
			$bornomala_menu_text_hover_color = $bornomala['bornomala_menu_text_hover_color'];
		}			
		
		if ( isset( $bornomala['bornomala_sub_menu_bg_color'] ) ) {
			$bornomala_sub_menu_bg_color = $bornomala['bornomala_sub_menu_bg_color'];
		}		
		
		if ( isset( $bornomala['bornomala_sub_menu_text_color'] ) ) {
			$bornomala_sub_menu_text_color = $bornomala['bornomala_sub_menu_text_color'];
		}								
				
		if ( isset( $bornomala['bornomala_preloader_bg_color'] ) ) {
			$bornomala_preloader_bg_color = $bornomala['bornomala_preloader_bg_color'];
		}				
		if ( isset( $bornomala['bornomala_spinner_color'] ) ) {
			$bornomala_spinner_color = $bornomala['bornomala_spinner_color'];
		}			
		
		if ( isset( $bornomala['bornomala_spinner_bgcolor'] ) ) {
			$bornomala_spinner_bgcolor = $bornomala['bornomala_spinner_bgcolor'];
		}	
		
		if ( isset( $bornomala['bornomala_footer_bg_color'] ) ) {
			$bornomala_footer_bg_color = $bornomala['bornomala_footer_bg_color'];
		}			
		
		if ( isset( $bornomala['bornomala_footer_text_color'] ) ) {
			$bornomala_footer_text_color = $bornomala['bornomala_footer_text_color'];
		}			
		
		if ( isset( $bornomala['bornomala_footer_link_color'] ) ) {
			$bornomala_footer_link_color = $bornomala['bornomala_footer_link_color'];
		}			
		
		if ( isset( $bornomala['bornomala_footer_border_color'] ) ) {
			$bornomala_footer_border_color = $bornomala['bornomala_footer_border_color'];
		}			

		
	?>

	<?php if($bornomala_menu_text_color) { ?>
		.navbar-default .navbar-nav > li > a {
		  color: <?php echo esc_attr($bornomala_menu_text_color);?>!important;
		}

	<?php } ?>		
	
	<?php if($bornomala_menu_bg_color) { ?>
		.menu-top {
		  background-color: <?php echo esc_attr($bornomala_menu_bg_color);?>;
		}

	<?php }?>		
	
	<?php if($bornomala_menu_text_hover_color) { ?>
		.menu-top li a:hover ,
		.menu_dropdown  ul li:hover ul.sub-menu li a:hover{
		  color: <?php echo esc_attr($bornomala_menu_text_hover_color);?> !important;
		}

	<?php }?>	
	
	<?php if($bornomala_sub_menu_bg_color) { ?>	
		.menu_dropdown  ul li:hover ul.sub-menu { 
			background: <?php echo esc_attr($bornomala_sub_menu_bg_color);?> !important; 
		}
	
	<?php } if($bornomala_sub_menu_text_color){ ?>		
		.menu_dropdown  ul li:hover ul.sub-menu li a{
			color:  <?php echo esc_attr($bornomala_sub_menu_text_color);?> !important;
		}
	<?php } if($bornomala_footer_bg_color) { ?>	

		.footer,
		.footer_copyright{
			background-color: <?php echo esc_attr($bornomala_footer_bg_color);?>;
		}		
	<?php } ?>	

	
	<?php if($bornomala_preloader_bg_color) { ?>
		.preloader{
		  background: <?php echo esc_attr($bornomala_preloader_bg_color);?>;
		}
	<?php }?>	
	
	<?php if($bornomala_spinner_color || $bornomala_spinner_bgcolor){ ?>
		.status-mes{
			border-left-color: <?php echo esc_attr($bornomala_spinner_color);?>;
			border-top-color: <?php echo esc_attr($bornomala_spinner_bgcolor);?>;
			border-right-color: <?php echo esc_attr($bornomala_spinner_bgcolor);?>;
			border-bottom-color: <?php echo esc_attr($bornomala_spinner_bgcolor);?>;
		}	
	<?php } if($bornomala_footer_text_color) { ?>
		.copyright,
		.copyright p{
		  color: <?php echo esc_attr($bornomala_footer_text_color);?>;
		}
	<?php }?>
	
	
	<?php if($bornomala_footer_link_color) { ?>
		.copyright a{
			color: <?php echo esc_attr($bornomala_footer_link_color);?>;
		}
	<?php } if($bornomala_theme_color){ ?>
		a,
		a:hover,
		.entry-title a:hover,
		.footer_social ul li a:hover,
		.single_event_text_single h4,
		.widget-area a:hover,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a{
			color: <?php echo esc_attr($bornomala_theme_color);?>;
		}
		
		.woocommerce a.remove{
			color: <?php echo esc_attr($bornomala_theme_color);?>!important;
		}
		
		.topcontrol,
		.btn-light-bg:hover, 
		.btn-light-bg:focus,
		.nav-links .nav-previous a:hover, 
		.nav-links .nav-next a:hover,
		.form-submit #submit:hover, 
		.form-submit #submit:focus, 
		button:hover, 
		input[type="button"]:hover, 
		input[type="reset"]:hover, 
		input[type="submit"]:hover,
		.navigation.pagination a:hover, 
		.navigation.pagination span,
		.home_btn_color_two,
		.promotion,
		.btn-light-bg:hover, 
		.btn-light-bg:focus,
		.team-name,
		.team-hover,
		.section-title span,
		.single_event_text,
		.post-date h4 strong,
		.head_color_two,
		.event_info h3,
		.event_info ul i,
		.event_info_price h4,
		.woocommerce span.onsale,
		.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
		.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
		.woocommerce #respond input#submit:hover, 
		.woocommerce a.button:hover, 
		.woocommerce button.button:hover, 
		.woocommerce input.button:hover,
		.woocommerce div.product form.cart .button{
			background: <?php echo esc_attr($bornomala_theme_color);?>;
		}
		
		.add_to_cat_btn button, 
		.woocommerce a.added_to_cart, 
		.continue-shopping.button, 
		.button.empty-cart, 
		.button.update, 
		.button.apply-coupon, 
		.checkout-button.button.alt.wc-forward, 
		#place_order, 
		.form-row.form-row-last .button, 
		.woocommerce .widget_price_filter .price_slider_amount .button,
		.shipping-calculator-form .button, 
		form.login .button, 
		form.lost_reset_password .button, 
		#review_form_wrapper #submit,
		.woocommerce a.remove:hover{
			background: <?php echo esc_attr($bornomala_theme_color);?>!important;
		}	
		
		.add_to_cat_btn button, 
		.woocommerce a.added_to_cart, 
		.continue-shopping.button, 
		.button.empty-cart, 
		.button.update, 
		.button.apply-coupon, 
		.checkout-button.button.alt.wc-forward, 
		#place_order, 
		.form-row.form-row-last .button, 
		.woocommerce .widget_price_filter .price_slider_amount .button,
		.shipping-calculator-form .button, 
		form.login .button, 
		form.lost_reset_password .button, 
		#review_form_wrapper #submit{
			border-color: <?php echo esc_attr($bornomala_theme_color);?>!important;
		}
		.nav-links .nav-previous a, 
		.nav-links .nav-next a,
		.home_btn_color_two,
		.woocommerce #respond input#submit:hover, 
		.woocommerce a.button:hover, 
		.woocommerce button.button:hover, 
		.woocommerce input.button:hover,
		.woocommerce div.product form.cart .button,
		.woocommerce div.product .woocommerce-tabs ul.tabs li,
		.woocommerce div.product .woocommerce-tabs ul.tabs::before{
			border-color: <?php echo esc_attr($bornomala_theme_color);?>;
		}
	<?php } if($bornomala_top_bg_color){?>
		.header_area{
			background: <?php echo esc_attr($bornomala_top_bg_color);?>!important;
		}
	<?php }  if($bornomala_top_text_color){ ?>
		.top-info-left ul li a,
		.top-info-left ul li{
			color: <?php echo esc_attr($bornomala_top_text_color);?>!important;
		}
		
	<?php } if($bornomala_top_icon_bg_color){ ?>
		.top-info-left ul li i{
			background: <?php echo esc_attr($bornomala_top_icon_bg_color);?>!important;
		}
	<?php } if($bornomala_top_icon_color){ ?>
		.top-info-left ul li i{
			color: <?php echo esc_attr($bornomala_top_icon_color);?>!important;
		}
	<?php } ?>
</style>

<?php
  endif;
}

add_action( 'wp_head', 'bornomala_movers_custom_css'  ) ;


