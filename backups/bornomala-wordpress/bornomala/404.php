<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bornomala
 */

get_header();
bornomala_404_banner();
?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center center-block">
				
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bornomala' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bornomala' ); ?></p>

							<?php
								get_search_form();

							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
								
			</div>
		</div>
	</div><!-- #primary -->
<?php
get_footer();
