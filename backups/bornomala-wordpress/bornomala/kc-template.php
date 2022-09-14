<?php
/**
 * Template Name: KC Template
 *
 * 
 * @package bornomala
 */

get_header(); 

$bornomala_page_br_template = get_post_meta(get_the_ID(), '_bornomala_page_br_template', true);

?>
		<div class="clearfix"></div>
		
<?php 
	if($bornomala_page_br_template == true){ 

		bornomala_single_banner();

	} 
 
 ?>
		
		<div id="kc_page_template">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // End of the loop. ?>
		</div><!-- #main -->
		
		<div class="clearfix"></div>

<?php get_footer(); ?>
