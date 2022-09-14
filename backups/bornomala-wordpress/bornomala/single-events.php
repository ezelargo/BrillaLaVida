<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bornomala
 */

get_header(); 
bornomala_single_banner();
?>

<?php
	while ( have_posts() ) : the_post();
	$bornomalal_events_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'bornomala_1200_720_img');
	$bornomala_events_info_label = get_post_meta(get_the_ID(), '_bornomala_events_info_label', true);
	$bornomala_events_price = get_post_meta(get_the_ID(), '_bornomala_events_price', true);
	$bornomala_events_group_field_opt = get_post_meta(get_the_ID(), '_bornomala_events_group_field_opt', true);
	?>
	
	<!-- START EVENT -->
	<section class="our_event section-padding">
		<div class="container">
			<div class="row">	
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="single_event_single">
						<img alt="" class="img-responsive" src="<?php echo esc_url($bornomalal_events_image[0]);?>"/>
						<div class="single_event_text_single">
							 <h4><?php the_title();?></h4>
							 <?php the_content();?>
						</div>
					</div><!--- END SINGLE EVENT -->
				</div><!--- END COL -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="event_info">
						<h3><?php echo esc_html($bornomala_events_info_label);?></h3>
						<ul>
							<?php
							
								foreach ( (array) $bornomala_events_group_field_opt as $key => $event_entry ) {

									$title = $icon = $info = '';

									if ( isset( $event_entry['_bornomala_ev_title'] ) )
										$title = $event_entry['_bornomala_ev_title'];

									if ( isset( $event_entry['_bornomala_ev_icon'] ) )
										$icon = $event_entry['_bornomala_ev_icon'];

									if ( isset( $event_entry['_bornomala_ev_info'] ) )
										$info = $event_entry['_bornomala_ev_info'];

									?>
									
									<li>
										<i class="<?php echo esc_attr($icon);?>"></i>
										<h4><?php echo esc_html($title);?></h4>
										<p><?php echo esc_html($info);?></p>
									</li>
																		
								<?php 
								
								} ?>			

														
						</ul>
					</div>
					
					<div class="event_info_price">
						<h4><?php esc_html_e('Price - ' , 'bornomala');?> <?php echo esc_html($bornomala_events_price);?></h4>
					</div>

				</div><!--- END COL -->
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END EVENT -->
	
	<?php
	endwhile; // End of the loop.
	?>


<?php

get_footer();
