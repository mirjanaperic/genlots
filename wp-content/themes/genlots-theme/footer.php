<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Genlots
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="widget-wrapper">
					<div class="container">
						<div class="row footer-widgets-wrapper">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="footer-bottom-inner">

							<?php if (get_theme_mod('footer_customizer_text') != ''): ?>

								<div class="footer-copyright">
									<span><?php echo get_theme_mod('footer_customizer_text'); ?></span>
								</div><!-- .footer-copyright -->

							<?php endif; ?>

							<?php $social_links = the_social_links( false );
							
							if( $social_links ): ?>

								<div class="footer-social">
									<span class="footer-social-label"><?php _e('Follow our latest updates on','genlots'); ?></span>
									<?php echo $social_links; ?>
								</div><!-- .footer-social -->
								
							<?php endif; ?>

						</div><!-- .footer-bottom-inner -->
					</div><!-- .container -->
				</div><!-- .footer-bottom -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
