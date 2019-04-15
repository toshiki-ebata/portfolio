<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array('list-article-plan', 'clearfix') ); ?>>

	<div class="plan">
			<?php if ( has_post_thumbnail()):?>
				<a class="title" href="<?php echo esc_url( get_permalink());?>" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large');?>)">
					<div class="box">	
						<?php echo get_the_title();?>
						<br>
						<?php echo get_post_meta(get_the_id() , 'サブタイトル' ,true);?>
						<br>
						<p class="plan-overview"><?php echo get_post_meta(get_the_id() , 'プラン概要' ,true);?></p>
					</div>
				</a>
			<?php else:?>
				<a href="<?php echo esc_url( get_permalink() );?>">
				<img alt="" src="<?php echo get_template_directory_uri();?> /assets/images/placholder2.png">
				</a>
			<?php endif;?>
	</div>

	

</article><!-- #post-## -->
