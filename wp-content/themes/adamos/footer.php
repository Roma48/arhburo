<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package adamos
 * @since adamos 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer_container">
    <div class="section group">

	<div class="col span_1_of_3">
    <?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>

	<?php endif; ?>
		</div>
        
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
        <div class="widget">
            <div id="text-3" class="widget widget_text">
                <h4>Як нас знайти?</h4>
            </div>
            <?php wd_contact_form_maker(11); ?>
        </div>
	<?php endif; ?> 

	</div>
    
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>

        <div class="widget">
            <div id="text-3" class="widget widget_text">
                <h4>Зворотній звязок</h4>
            </div>
            <?php wd_contact_form_maker(10); ?>
        </div>
	<?php endif; ?>
	</div>
	</div>
        </div><!-- footer container -->

	</footer><!-- #colophon .site-footer -->
    <a href="#top" id="smoothup"></a>
</div><!-- #page .hfeed .site -->
</div><!-- end of wrapper -->
<?php wp_footer(); ?>

</body>
</html>