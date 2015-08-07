<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</div><!-- #inner-main-wrap .inner-wrap -->
	</div><!-- #main .wrapper -->
	<div id="pre-footer-full" class="column-centerfull section-column pre-footer-full">
		<div class="inner-wrap">
			<div class="column-left section-column">
				<div class="inner-column-wrap">
					<h3>Locals Love Us</h3>
					<p>Collision Repair Center has been serving the East Moline area since 1979. We like to keep our employees and customers around. Stop in for a repair, quote or just to say hi!</p>
				</div>
			</div>
			<div class="column-right section-column">
				<?php echo maudience_return_custom_posts('testimonials', '1', $title_or_content = 'both'); ?>
			</div>
		</div>
	</div>
	<footer id="colophon" role="contentinfo">
		<div id="inner-footer-wrap" class="inner-footer-wrap inner-wrap">
			<?php if ( is_active_sidebar( 'footer-widget-left' ) ) : ?>
				<div id="footer-widget-left" class="footer-widget-left widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-left' ); ?>
				</div><!-- #footer-widget-left -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-widget-center' ) ) : ?>
				<div id="footer-widget-center" class="footer-widget-center widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-center' ); ?>
				</div><!-- #footer-widget-center -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-widget-right' ) ) : ?>
				<div id="footer-widget-right" class="footer-widget-right widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-right' ); ?>
				</div><!-- #footer-widget-right -->
			<?php endif; ?>
		</div><!-- #inner-footer-wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
