<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="sidebar" class="widget-area col300" role="complementary">
       <div><h4>O Colunista.</h4>
        		<p>Coluna Romerito Aquino.</p>
                <p>ARomerito Aquino é jornalista desde 1976. Nasceu em Rio Branco (AC), formou-se em jornalismo na UnB (1980) e trabalhou, entre outros, no Jornal do Brasil, O Globo, Correio Braziliense, Jornal de Brasília, A Crítica, A Gazeta do Acre, Varadouro, Folha do Acre, O Rio Branco, Página 20 e A Tribuna.
Ganhador do prêmio José Chalub Leite de Jornalismo (AC) de 2004 com a série de reportagens “Acre, terra da biodiversidade”.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Raquino' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Romerito' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>
        </div><!-- #sidebar .widget-area -->
