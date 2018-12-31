<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php if(is_singular( 'architectural' ) ||is_post_type_archive( 'architectural' )):?>
	<div id="secondary" class="widget-area sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #secondary -->
<?php elseif(is_singular( 'blog' ) ||is_post_type_archive( 'blog' )):?>
<div id="secondary" class="widget-area sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #secondary -->
<?php else:?>
	<div id="secondary" class="widget-area sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
<?php endif;?>
