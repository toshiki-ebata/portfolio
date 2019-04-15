<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php if ( get_theme_mod( 'single_meta', 1 ) ) { ?>
        <?php } ?>
	</header><!-- .entry-header -->
	<div>
		<p><?php echo get_post_meta($post->ID , 'サブタイトル' ,true); ?></p>
		<p><?php echo get_post_meta($post->ID , 'プラン概要' ,true); ?></p>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <?php if ( get_theme_mod( 'single_meta', 1 ) ) { ?>
	<footer class="entry-footer">
		<?php onepress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    <?php } ?>
</article><!-- #post-## -->

