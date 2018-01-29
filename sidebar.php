<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
		<div id="sidebar" class="widget-area col300" role="complementary">
        
<!-- < ? php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=especial_home' ); ?> -->



<div><?php echo do_shortcode('[cycloneslider id ="lateral1"]'); ?></div>
<div><br /></div>

<div><?php echo do_shortcode('[cycloneslider id ="ateral6"]'); ?></div>
<div></div>

     		<?php if ( ! dynamic_sidebar( 'Lateral2' ) ) : ?>  
<?php endif; // Segundo widget area ?>

<div><?php echo do_shortcode('[cycloneslider id ="lateral2"]'); ?></div>
<div><br /></div>
        
     		<?php if ( ! dynamic_sidebar( 'Lateral3' ) ) : ?>  
<?php endif; // Segundo widget area ?>

<div><?php echo do_shortcode('[cycloneslider id ="lateral3"]'); ?></div>
<div><br /><br /></div>

     		<?php if ( ! dynamic_sidebar( 'Lateral4' ) ) : ?>  
<?php endif; // Segundo widget area ?>



<!-- publicidade
<div>< ?php if( function_exists('cyclone_slider') ) cyclone_slider('lateral4'); ?></div>
<div>< ?php echo do_shortcode('[cycloneslider id ="lateral5"]'); ?></div>
<div><br /></div> -->


			<?php if ( ! dynamic_sidebar( 'sidebar-right' ) ) : ?>

			<?php endif; // end sidebar widget area ?>
            
<div  style="margin:0px 0px 30px 0px">            
            <?php 
    echo do_shortcode("[metaslider id=59257]"); 
?>
</div>



            
			<?php if ( ! dynamic_sidebar( 'Lateral1' ) ) : ?>  
<?php endif; // Primeiro widget area ?>            

		</div><!-- #sidebar .widget-area -->
