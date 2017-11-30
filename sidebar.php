<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
                    <?php do_action('before_sidebar'); ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
        <?php do_action('after_sidebar'); ?>
<?php endif; ?>
