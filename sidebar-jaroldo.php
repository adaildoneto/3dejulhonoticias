<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="sidebar" class="widget-area col300" role="complementary">
        <div><h4>O Colunista.</h4>
        		<p>Jacks Aroldo.</p>
                <p>Jacks Aroldo Batista Pessoa, formado em Matemática pela Universidade Federal do Acre - UFAC, Professor da rede pública estadual de ensino na Escola Instituto Odilon Pratagi. É um dos fundadores do Movimento Acorda Brasiléia – MAB, paralelo ao ensino, tem um programa de rádio aos domingos das 07:00 as 09:00 da manhã intitulado Rádio MAB (Acorda Cidade) pela Jovem Pan Internacional FM 105,7.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Mmaciel' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Jaroldo' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div><!-- #sidebar .widget-area -->
