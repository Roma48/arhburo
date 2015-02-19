<?php
/*
 * Template Name: Custom Home Page
 * Description: A home page with featured slider and widgets.
 *
 * @package adamos
 * @since adamos 1.0
 */

get_header('no-slider'); ?>
        
        <div id="primary_home" style="margin-top: 20px" class="content-area">
			<div id="content" class="fullwidth" role="main">
    <div  class="entry-title">Наші Послуги</div>
                
   <div class="section group">
	<div class="col span_1_of_3">         
    <div class="featuretext">
			 <h3><?php echo get_theme_mod( 'featured_textbox_header_one' ); ?></h3>
             <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/1.jpg" />
	</div>
    </div>


    
    <div class="col span_1_of_3">         
     <div class="featuretext">
			 <h3><?php echo get_theme_mod( 'featured_textbox_header_two' ); ?></h3>
             <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/2.jpg" />
	</div>
    </div>
    
   <div class="col span_1_of_3">         
     <div class="featuretext">
			 <h3><?php echo get_theme_mod( 'featured_textbox_header_three' ); ?></h3>
                <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/3.jpg" />
	</div>
    </div>
       <div class="col span_1_of_3" style="margin-left: 0">
           <div class="featuretext">
               <h3><?php echo get_theme_mod( 'featured_textbox_header_one' ); ?></h3>
               <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/1.jpg" />
           </div>
       </div>



       <div class="col span_1_of_3">
           <div class="featuretext">
               <h3><?php echo get_theme_mod( 'featured_textbox_header_two' ); ?></h3>
               <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/2.jpg" />
           </div>
       </div>

       <div class="col span_1_of_3">
           <div class="featuretext">
               <h3><?php echo get_theme_mod( 'featured_textbox_header_three' ); ?></h3>
               <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/3.jpg" />
           </div>
       </div>
       <div class="col span_1_of_3" style="margin-left: 0 ">
           <div class="featuretext">
               <h3><?php echo get_theme_mod( 'featured_textbox_header_four' ); ?></h3>
               <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/4.jpg" />
           </div>
       </div>

       <div class="col span_1_of_3">
           <div class="featuretext">
               <h3><?php echo get_theme_mod( 'featured_textbox_header_five' ); ?></h3>
               <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/5.jpg" />
           </div>
       </div>

       <div class="col span_1_of_3">
           <div class="featuretext">
               <h3><?php echo get_theme_mod( 'featured_textbox_header_six' ); ?></h3>
               <img style="width: 250px; height: 200px" src="/wp-content/themes/adamos/images/6.png" />
           </div>
       </div>


    </div>
    

    
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>