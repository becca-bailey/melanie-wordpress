<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

<div class="site-footer">
		<footer id="footer" class="site-footer" role="contentinfo">
            
    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<div id="secondary-sidebar" class="secondary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div><!-- #secondary-sidebar -->
	<?php endif; ?>
		</footer><!-- #footer -->
	

	<?php wp_footer(); ?>
</div><!-- #page -->
</body>
</html>