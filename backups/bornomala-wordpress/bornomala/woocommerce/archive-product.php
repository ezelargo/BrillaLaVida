<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); 
bornomala_shop_banner();
?>

<div class="shop-product-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">		
				<div class="shop_top_section">
					<div class="sorter pull-left">
						<div class="sort-by">
							<label><?php esc_html_e('Sort By','bornomala'); ?></label>
							<?php do_action( 'woocommerce_before_shop_loop_order' ); ?>
						</div>
					</div>
					
					<div class="pager-list">
						<?php bornomala_woocommerce_products_per_page(); ?>
					</div>
					
				</div><!-- End Tab Bar -->
				
				<div class="main_shop_area">
					<div class="row">
						<!-- Start Single Product Column -->
						<?php if ( have_posts() ) : ?>
							<?php woocommerce_product_loop_start(); ?>
								<?php woocommerce_product_subcategories(); ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php wc_get_template_part( 'content', 'product-grid' ); ?>
								<?php endwhile; // end of the loop. ?>
							<?php woocommerce_product_loop_end(); ?>
						<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
							<?php wc_get_template( 'loop/no-products-found.php' ); ?>
						<?php endif; ?><!-- End Single Product Column -->
					</div>
				</div><!-- End Tab Content -->	
				


				<div class="shop_pagination text-center">								
					<?php do_action( 'woocommerce_after_shop_loop' ); ?>
				</div>
	
	
			</div>
			
			<div class="col-sm-3">
				<div class="shop-product-left widget-area">
					<?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					<?php endif; ?>
				</div>
			</div>					
		</div>
	</div>
</div>
	
<?php get_footer( 'shop' ); ?>
