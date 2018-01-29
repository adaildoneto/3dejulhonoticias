<?php get_header(); ?>

<?php if(is_category() || (is_single() && in_category('6')) ){ ?>

<!--		<div class="esplogo"><img src="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/01/esporte-logo-joao.jpg" /></div> -->
   
   <?php }  else  { ?>

<?php if(is_category() || (is_single() && in_category('28')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/crica-logo.jpg" width="967px" alt="Blog do Crica"></div>
   
   <?php }  else  { ?>

<?php if(is_category() || (is_single() && in_category('29')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/asterio-logo.jpg" width="967px" alt="Coluna do Asterio"></div>
   
   <?php }  else  { ?>        
        
<?php if(is_category() || (is_single() && in_category('33')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/mmaciel-coluna.jpg" width="967px" alt="Blog do Mariano Maciel"></div>
   
   <?php }  else  { ?>                
        
        <?php if(is_category() || (is_single() && in_category('34')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/romerito-coluna.jpg" width="967px" alt="Blog do Romerito Aquino"></div>
   
   <?php }  else  { ?>                
        
        <?php if(is_category() || (is_single() && in_category('35')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/drvaladares-coluna.jpg" width="967px" alt="Blog do Crica"></div>
   
   <?php }  else  { ?>  
  
  <?php if(is_category() || (is_single() && in_category('36')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/mroberto-coluna.jpg" width="967px" alt="Blog do Mário Roberto"></div>
   
   <?php }  else  { ?>
   
     <?php if(is_category() || (is_single() && in_category('39')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/jaroldo-coluna.jpg" width="967px" alt="Coluna do Jacks Aroldo"></div>
   
   <?php }  else  { ?>

     <?php if(is_category() || (is_single() && in_category('44')) ){ ?>

		<div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/10/emfoco-coluna.jpg" width="967px" alt="Coluna Em Foco"></div>
   
   <?php }  else  { ?>		
        
        
   <?php }}}}}}}}} ?>
      
    <div id="content" class="clearfix">
        
        <div id="main" class="col620 clearfix" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>
                


				<?php attorney_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>
            


        </div> <!-- end #main -->

<?php if(is_category() || (is_single() && in_category('6')) ){ ?>

		<?php get_sidebar("esporte"); ?>
   
   <?php }  else  { ?>

<?php if(is_category() || (is_single() && in_category('28')) ){ ?>

		<?php get_sidebar("crica"); ?>
   
   <?php }  else  { ?>

<?php if(is_category() || (is_single() && in_category('29')) ){ ?>

		<?php get_sidebar("asterio"); ?>
   
   <?php }  else  { ?>        
        
<?php if(is_category() || (is_single() && in_category('33')) ){ ?>

		<?php get_sidebar("Mmaciel"); ?>
   
   <?php }  else  { ?>                
        
        <?php if(is_category() || (is_single() && in_category('34')) ){ ?>

		<?php get_sidebar("Raquino"); ?>
   
   <?php }  else  { ?>                
        
        <?php if(is_category() || (is_single() && in_category('35')) ){ ?>

		<?php get_sidebar("Dvaladares"); ?>
   
   <?php }  else  { ?>  
  
  <?php if(is_category() || (is_single() && in_category('36')) ){ ?>

		<?php get_sidebar("Mroberto"); ?>
   
   <?php }  else  { ?>
   
     <?php if(is_category() || (is_single() && in_category('39')) ){ ?>

		<?php get_sidebar("jaroldo"); ?>
        
   <?php }  else  { ?>
        
     <?php if(is_category() || (is_single() && in_category('44')) ){ ?>

		<?php get_sidebar("social"); ?>
   
   <?php }  else  { ?>

		<?php get_sidebar("post"); ?>
        
        
   <?php }}}}}}}}} ?>
      

    </div> <!-- end #content -->
        
<?php get_footer(); ?>