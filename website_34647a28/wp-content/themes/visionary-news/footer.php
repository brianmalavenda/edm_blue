<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Visionary News
 */

if ( ! is_front_page() || is_home() ) {
	?>
</div>
</div>
</div>

<?php } ?>

<!-- start of footer -->
<footer class="site-footer">
	<?php

	if ( is_active_sidebar( 'footer-widget' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) :
		?>
	<div class="visionary-news-top-footer">
		<div class="section-wrapper">
			<div class="top-footer-wrapper">
				<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
					<div class="footer-container-wrapper">
						<div class="footer-content-inside">
							<?php dynamic_sidebar( 'footer-widget-' . $i ); ?>
						</div>
					</div>
				<?php } ?>
			</div>	
		</div>	
	</div>
	<?php endif; ?>
	<div class="visionary-news-bottom-footer">
		<div class="section-wrapper">
			<div class="bottom-footer-content">
				<?php
				/**
				 * Hook: visionary_news_footer_copyright.
				 *
				 * @hooked - visionary_news_output_footer_copyright_content - 10
				 */
				do_action( 'visionary_news_footer_copyright' );
				?>
			</div>
		</div>
	</div>
</footer>
<div class="scroll-progress-container">
	<svg class="scroll-progress-circle" viewBox="0 0 100 100">
		<circle class="scroll-progress-background" cx="50" cy="50" r="45"></circle>
		<circle class="scroll-progress-circle-bar" cx="50" cy="50" r="45"></circle>
	</svg>
	<div class="scroll-to-top">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
			<path d="M12 19V5M5 12l7-7 7 7" />
		</svg>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
