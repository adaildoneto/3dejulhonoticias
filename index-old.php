<?php get_header(); ?>

    <div id="content" class="clearfix">

<div>

        <?php echo do_shortcode("[metaslider id=42466]"); ?>

</div>
  
        <div id="main" class="col620 clearfix" role="main">


        <div>
        <h4>DESTAQUES</h4>
        <?php echo do_shortcode("[metaslider id=2181]"); ?>
        </div><br />
     
   		<div class="publici2">	
        
        
            <div style="position: relative; width: 625px; height: 115px; z-index:999">     
    <div id="exp-banner" style=" position:absolute;clip: rect(0px 625px 115px 0px); " onMouseOver="expand()" onMouseOut="retract()">
 
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="625" height="450" id="exp-banner" align="middle">
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="allowFullScreen" value="false" />
        <param name="movie" value="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/08/publi-dika-saudev2.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#666666" />	<embed src="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/08/publi-dika-saudev2.swf" quality="high" wmode="transparent" bgcolor="#666666" width="625" height="450" name="movie" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
      </object>
</div>
</div>
        
       
        </div>     
     

        <div><a href="http://www.3dejulhonoticias.com.br/?page_id=41664"><img src="https://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/bt-col-crica.jpg" width="309px"/></a>&nbsp;<a href="http://www.3dejulhonoticias.com.br/?page_id=41690"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/bt-col-asterio.jpg"width="309px" /></a>
        </div>
<!--        <div>
        <h4>GERAL</h4>
        < ? php echo do_shortcode("[metaslider id=2368]"); ?>
        </div>
        -->
        
        <div class="publici2" style="z-index:-1"><?php echo do_shortcode('[cycloneslider id ="publicidade05"]'); ?></div>

              
<!-- widget - home1 -->
<div class="wggeral2">
<div class="wg1">   
<?php if ( !function_exists('dynamic_sidebar') 
|| !dynamic_sidebar("home1")):?> 
<?php endif; ?>
</div>

<div class="wg1">                
<?php if ( !function_exists('dynamic_sidebar') 
|| !dynamic_sidebar("home2")):?> 
<?php endif; ?>
</div>

</div>

<div class="publici2"><?php echo do_shortcode('[cycloneslider id ="publicidade01"]'); ?></div>

<div class="wggeral2">
<div class="wg1">  
<?php if ( !function_exists('dynamic_sidebar') 
|| !dynamic_sidebar("home3")):?> 
<?php endif; ?>
</div>
<div class="wg1">                
<?php if ( !function_exists('dynamic_sidebar') 
|| !dynamic_sidebar("home4")):?> 
<?php endif; ?>
</div>

</div>

<!--  <div class="publici2">< ? php echo do_shortcode('[cycloneslider id ="publicidade-4"]'); ? ></div> -->

<div class="publici2"><?php echo do_shortcode('[cycloneslider id ="teste"]'); ?></div>
<!-- inicio - esporte -->


<!-- cabeçalho esporte -->

<div>
<a href="http://www.3dejulhonoticias.com.br/?page_id=5850">
<img src="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/01/logo-esporte-home.jpg" width="641px" /></a>
</div>

<div class="esp3"> 
       
<?php query_posts('cat=6&posts_per_page=2'); ?>
                     <?php if (have_posts()): while (have_posts()) : the_post();?>
               

<?php if(has_post_thumbnail( )): ?><div class="esp3-thumb"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('esp'); ?></a></div><?php endif; ?><?php  ?>

<div class="pp-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<?php the_excerpt() ?>

<div class="pp-divisor"></div>
                  <?php endwhile; else:?>
		       <?php endif;?>

</div>

<div class="esp3"> 
       
       
<?php query_posts('cat=6&offset=2&posts_per_page=5'); ?>
                     <?php if (have_posts()): while (have_posts()) : the_post();?>
                     
<?php if(has_post_thumbnail( )): ?><div class="esp3-thumb"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('espmenor'); ?></a></div><?php endif; ?><?php  ?>
                     
<div class="esptitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="subt"><?php the_excerpt() ?></div>
<div class="pp-divisor"></div>
                  <?php endwhile; else:?>
		       <?php endif;?>

</div>
<!-- fim - esporte -->

 		<div class="publici2"><?php echo do_shortcode('[cycloneslider id ="publicidade02"]'); ?></div>

<div class="wggeral3">
<div class="wg1">                
<?php if ( !function_exists('dynamic_sidebar') 
|| !dynamic_sidebar("home5")):?> 
<?php endif; ?>
</div>

<div class="wg1">                
<?php if ( !function_exists('dynamic_sidebar') 
|| !dynamic_sidebar("home6")):?> 
<?php endif; ?>
</div>

</div>

<div class="publici2"><?php echo do_shortcode('[cycloneslider id ="ultimo"]'); ?></div>
<!-- blogs - pagina 

<div class="blogs">
< ?php query_posts('page_id=1772'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	< ?php the_content(); ?>
< ?php endwhile; endif; wp_reset_query(); ?>
</div> -->

<!-- blogs fim -->

        </div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>