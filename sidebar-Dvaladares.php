<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="sidebar" class="widget-area col300" role="complementary">
        <div><h4>O Colunista.</h4>
        		<p>Francisco Valadares Neto, advogado, graduado pelo Instituto Luterano de Ensino Superior de Ji-Paraná (ILES/ULBRA), sócio fundador do Escritório de Advocacia FV ADVOCACIA, pós-graduado em Direito Público pela Faculdade Integrada de Pernambuco, Doutorando em Ciências.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Dvaladres' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Valadares' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>
        </div><!-- #sidebar .widget-area -->
