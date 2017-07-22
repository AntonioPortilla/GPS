</div><!-- #content -->
<?php

    $footer_email = get_theme_mod('riba_lite_email', 'contacto@gpsolutions.pe');
    $footer_phone = get_theme_mod('riba_lite_phone', '+51 1 246 0086 Anexo:22');
    $footer_dir = get_theme_mod('riba_lite_dir', 'Av. el Derby 250 Oficina 1903,');
    $footer_dis = get_theme_mod('riba_lite_dis', 'Santiago de Surco, Lima- Perú');
    $footer_copyright = get_theme_mod('riba_lite_footer_copyright', sprintf('&copy; %s', __('Macho Themes 2016. All Rights Reserved', 'riba-lite') ) );
?>

<footer id="footer" class="site-footer container-fluid" role="contentinfo">
    <!--<div class="footer-widget-container">
            <?php

                /*echo '<div class="mt-footer-widget col-md-6">';
                if( is_active_sidebar( 'footer-sidebar-1' ) ) {
                    dynamic_sidebar('footer-sidebar-1');
                } else {
                    the_widget('riba_lite_widget_about', sprintf( 'title=%s', __('About', 'riba-lite') ) .'&'. sprintf('about_text=%s.', __('The many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected true of a humour', 'riba-lite') ) );
                }
                echo '</div><!--/.mt--foter--widget.col-md-6-->';

                echo '<div class="mt-footer-widget col-md-6">';
                if( is_active_sidebar( 'footer-sidebar-2' ) ) {
                    dynamic_sidebar('footer-sidebar-2');
                } else {
                    the_widget('riba_lite_widget_social_media', sprintf( 'title=%s', __('Follow us', 'riba-lite') ).'&profile_facebook=#&profile_twitter=#&profile_plus=#&profile_pinterest=#&profile_youtube=#&profile_dribbble=#&profile_tumblr=#&profile_instagram=#.');
                }
                echo '</div><!--/.mt--foter--widget.col-md-6-->';*/


            ?>
    </div>-->
    <div class="clearfix"></div>
    <div class="footer-contact-container">
        	<div class="mapa">

<iframe class="actAsDiv" style="width:100%;height:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;q=El%20Derby%20250%2C%20Lima%2015023&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
        	</div>
        <div class="container">
            <div class="row">
					<div class="col-lg-12 col-md-4 col-xs-12">
	                    <div class="text-lg-left text-md-left text-sm-left text-xs-center">
							<ul class="social">
								<li><a href="#"><img src="gps/images/face.png" alt="facebook"></a></li>
								<li><a href="#"><img src="gps/images/lin.png" alt="instagram"></a></li>
							</ul>
	                    </div>
	                </div>
            	<?php if($footer_email !== '' || $footer_phone !== '' || $footer_dir !== '' || $footer_dis !== '' ) { ?>
				<div class="col-lg-12 col-md-4 col-xs-12">
                    <div class="text-lg-left text-md-left text-sm-left text-xs-center">
						<ul class="localizacion">
							<li><?php _e('', 'riba-lite'); ?><a href="mailto:<?php echo esc_attr( $footer_email ); ?>" rel="nofollow" target="_blank"><?php echo esc_attr( $footer_email ); ?></a></li>
							<li><?php _e('', 'riba-lite'); ?><a href="tel:<?php echo esc_attr( $footer_phone ); ?>" rel="nofollow"><?php echo esc_attr( $footer_phone ); ?></a></li>
							<li><?php _e('', 'riba-lite'); ?><a href="tel:<?php echo esc_attr( $footer_dir ); ?>" rel="nofollow"><?php echo esc_attr( $footer_dir ); ?></a></li>
							<li><?php _e('', 'riba-lite'); ?><a href="tel:<?php echo esc_attr( $footer_dis ); ?>" rel="nofollow"><?php echo esc_attr( $footer_dis ); ?></a></li>
						</ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>



   <!--
    <div class="footer-copyright-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="footer-copyright">

                        <?php echo esc_html($footer_copyright); ?>


                        <?php _e('Powered by','riba-lite'); ?> <a href="<?php echo esc_url( __( 'https://www.machothemes.com', 'riba-lite') ); ?>" target="_blank" title="<?php echo 'Professional Responsive WordPress Themes'; ?>"><?php _e('Macho Themes', 'riba-lite'); ?></a>

                        &middot;

                        Theme: <a href="https://www.machothemes.com/themes/riba-lite" title="Photo blogging WordPress theme">Riba Lite</a>


                    </p>
                </div>
            </div>
        </div>
    </div> -->

</footer>
</div><!-- #page -->
	<a href="#" class="mt-top"><?php _e('Top', 'riba-lite'); ?></a>


<?php wp_footer(); ?>


</body>
</html>