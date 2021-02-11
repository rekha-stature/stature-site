<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				 <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-12">
            <div class="footer-info">
             <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
          </div>

          <div class="col-lg-5 col-md-12 footer-links">
           <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>

        

          <div class="col-lg-2 col-md-12 footer-newsletter">
          	<h2 class="widget-title subheading heading-size-3" style="margin-top: 0px;">Follow us</h2>
              <ul id="footer-social">
		            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
		            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
		        </ul>

          </div>
</div>
        </div>
    </div>
    			<div class="bottom">
    				<div class="container">
				<div class="row d-flex justify-content-center">
						

						<p>
							<a href="<?php echo esc_url( __( 'http://www.statureit.com/', 'twentytwenty' ) ); ?>">
								<?php _e('&copy All rights reserved by Stature Pvt Ltd', 'twentytwenty' ); ?>
							</a>
						</p>

					</div><!-- .footer-credits -->
</div>
				</div>
      <!-- .section-inner -->

				<script type="text/javascript">
					jQuery(document).ready(function(){
// 						jQuery('.box1').hover(function(){
// 							jQuery('.integrity').slideToggle('slow');
// 						});
// 						jQuery('.box2').hover(function(){
// 							jQuery('.Passion').slideToggle('slow');
// 						});
// 						jQuery('.box3').hover(function(){
// 							jQuery('.respect').slideToggle('slow');
// 						});
// 						jQuery('.box4').hover(function(){
// 							jQuery('.community').slideToggle('slow');
// 						});
						jQuery('.hamburgericon').click(function(){
							jQuery(this).hide();
							jQuery(this).addClass('closebtn');
						});
						
						jQuery(window).scroll(function() {
							if (jQuery(this).scrollTop() > 1){ 
								jQuery('#topbar').addClass("topbar-scrolled");
								jQuery('header').addClass("sticky");
							}
							else{
								jQuery('#topbar').removeClass("topbar-scrolled");
								jQuery('header').removeClass("sticky");
							}
						});
					});
					AOS.init({
  duration: 1200,
});
				</script>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
