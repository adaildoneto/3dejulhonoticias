<?php 
/**
 * Template Name: Alt_HomePage, with Static Slider
 * Description: An alternative homepage that displays a static content on top of image slider
 */
get_header(); ?>

    <div id="content" class="clearfix">
        
        <div id="main" class="clearfix sldr" role="main">
		
        	<div id="slide-wrap">
			  
			<?php if ( have_posts() ) : ?>
            <div id="load-cycle"></div>
              <div class="cycle-slideshow alt-static" <?php 
				  	if ( get_theme_mod('attorney_slider_effect') ) {
						echo 'data-cycle-fx="' . wp_kses_post( get_theme_mod('attorney_slider_effect') ) . '" data-cycle-tile-count="10"';
					} else {
						echo 'data-cycle-fx="scrollHorz"';
					}
				  ?> data-cycle-slides="> div.slides" <?php
                  	if ( get_theme_mod('attorney_slider_timeout') ) {
						$slider_timeout = wp_kses_post( get_theme_mod('attorney_slider_timeout') );
						echo 'data-cycle-timeout="' . $slider_timeout . '000"';
					} else {
						echo 'data-cycle-timeout="2500"';
					}
				  ?> data-cycle-pause-on-hover="true">
            
            
            <?php while ( have_posts() ) : the_post();    

			 $args = array(
			   'post_type' => 'attachment',
			   'numberposts' => -1,
			   'post_status' => null,
			   'post_parent' => $post->ID,
			   'orderby' => 'menu_order', 
			   'order' => 'ASC'
			  );
			
			  $attachments = get_posts( $args );
				 if ( $attachments ) {
					foreach ( $attachments as $attachment ) { ?>
                    <div class="slides">
                      <div id="post-<?php the_ID(); ?>" <?php post_class('post-theme'); ?>>
                    	<div class="slide-thumb" style="background-image:url(<?php echo wp_get_attachment_url( $attachment->ID, array( 1000, 640 ), false, '' ); ?>)"></div>
					   						
                      </div>
                    </div>
					  <?php }
				 } else {
					 ?>
                     <div class="no-slide-image"><?php _e('Images added to this page will appear here', 'attorney'); ?></div>
                     <?php
				 }
				 
 			endwhile; ?>
            
			<?php $content = attorney_content(-1); ?>
			<?php $content = preg_replace("/<img[^>]+./", "", $content); ?>
           
            <div class="slide-content alt-static-hide">
              <div class="slide-copy">
                <h2 class="slide-title"><?php the_title(); ?></h2>
				<?php echo $content; ?>
              </div>
            </div>
            
            </div>
            
            <div class="slide-content alt-static-show">
              <div class="slide-copy">
                <h2 class="slide-title"><?php the_title(); ?></h2>
				<?php echo $content; ?>
              </div>
            </div>
            
            <?php endif; ?> 
            
            
            </div>                   


        </div> <!-- end #main -->

        <?php get_sidebar('home'); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>