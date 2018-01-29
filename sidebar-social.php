<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="sidebar" class="widget-area col300" role="complementary">
        <div><h4>Wesley Cardoso</h4>
        		<p>Repórter Cinematográfico sobre o registro DRT102/08  Fotógrafo a mais de 20 anos, realiza cobertura de eventos sociais, culturais, políticos e religiosos. Tem como objetivo principal expressar nesta coluna os costumes de nossa gente bem como manter viva a cultura do povo do Vale do Acre.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Social' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Social' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div><!-- #sidebar .widget-area -->
