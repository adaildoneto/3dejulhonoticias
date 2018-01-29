<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
		<div id="sidebar" class="widget-area col300" role="complementary">

	        
<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Esporte' ); ?><br />
    

			<?php if ( ! dynamic_sidebar( 'Esporte-Pagina' ) ) : ?>


			<?php endif; // end sidebar widget area ?>
            
		</div><!-- #sidebar .widget-area -->
