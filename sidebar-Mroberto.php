<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="sidebar" class="widget-area col300" role="complementary">
		<div id="sidebar" class="widget-area col300" role="complementary">
        <div><h4>O Colunista.</h4>
        		<p>Coluna Mário Roberto.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Mroberto' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Mroberto' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>
        </div><!-- #sidebar .widget-area -->
