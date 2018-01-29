<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="sidebar" class="widget-area col300" role="complementary">
        <div><h4>O Colunista.</h4>
        		<p>Direto do Planalto com Mariano Maciel.</p>
                <p>As opiniões expressadas em Colunas não refletem necessariamente a opinião do Jornal. Todo conteúdo é de inteira responsabilidade de seus autores.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Mmaciel' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Planalto' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div><!-- #sidebar .widget-area -->
