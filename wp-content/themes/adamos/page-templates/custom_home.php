<?php
/*
 * Template Name: Custom Home Page
 * Description: A home page with featured slider and widgets.
 *
 * @package adamos
 * @since adamos 1.0
 */

get_header(); ?>
        
        <div id="primary_home" class="content-area">
			<div id="content" class="fullwidth" role="main">
  
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
    
     <div class="section_thumbnails group">
	<?php echo '<h3>' . __('Recent Posts', 'adamos') . '</h3>'; ?>

  <?php $the_query = new WP_Query(array(
  'showposts' => 2,
  'post__not_in' => get_option("sticky_posts"),
  ));
 ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="col span_1_of_2">
    <article class="recent">
    			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php
			if ( has_post_thumbnail() ) {
    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'featured' );
     echo '<img alt="post" class="imagerct" src="' . $image_src[0] . '">';
}
  			?>
                <?php echo adamos_content(50); ?><div class="thumbs-more-link"><a href="<?php the_permalink() ?>"> <?php echo __('More', 'adamos'); ?></a></div>
    </article>
    </div>			
	<?php endwhile; ?>

    </div>
    
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>