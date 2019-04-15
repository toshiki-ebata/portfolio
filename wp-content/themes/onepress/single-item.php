<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OnePress
 */

get_header();
$layout = onepress_get_layout();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );
?>

	<div id="content" class="site-content">

		<?php onepress_breadcrumb(); ?>

		<div id="content-inside" class="container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'item' ); ?>
					<div class="bxslider">
						<?php
						//外観写真
						for($i=1;$i<5;$i++){
							$img = get_post_meta($post->ID , '外観写真'.$i ,true);
							$imgurl = wp_get_attachment_image_src($img, 'large'); //サイズは自由に変更してね
							$imagurl_thumbnail=wp_get_attachment_image_src($img,'thumbnail'); //サイズは自由に変更してね
							if($imgurl){ ?>
								<a href="<? echo $imgurl[0]; ?>" data-lightbox="group"><img src="<? echo $imgurl[0]; ?>" alt="外観写真<?php echo $i;?>"></a>
							<? } 
						}?>	
					</div>
					<table>
						<tr>
							<th>住所</th>
							<td><?php echo get_post_meta($post->ID , 'address' ,true); ?></td>
						</tr>
						<tr>
							<th>主要用途</th>
							<td><?php echo get_post_meta($post->ID , 'to_use' ,true); ?></td>
						</tr>
						<tr>
							<th>主要構造</th>
							<td><?php echo get_post_meta($post->ID , 'structure' ,true); ?></td>	
						</tr>
						<tr>
							<th>規模</th>
							<td><?php echo get_post_meta($post->ID , 'scale' ,true); ?></td>	
						</tr>
						<tr>
							<th>完成</th>
							<td><?php echo get_post_meta($post->ID , 'complete_month' ,true); ?></td>	
						</tr>
					</table>
					
					<?php
					//間取り図
					for($i=1;$i<3;$i++){
						$img = get_post_meta($post->ID , '間取り図'.$i ,true);
						$imgurl = wp_get_attachment_image_src($img, 'large'); //サイズは自由に変更してね
						if($imgurl){ ?>
							<img src="<? echo $imgurl[0]; ?>" alt=""></p>
						<? } 
					}
					?>	
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
