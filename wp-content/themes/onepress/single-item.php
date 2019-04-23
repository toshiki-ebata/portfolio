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

					<ul class="bxslider">
						<?php
						//外観写真
						for($i=1;$i<5;$i++){
							$img = get_post_meta($post->ID , '外観写真'.$i ,true);
							$imgurl = wp_get_attachment_image_src($img, 'large'); //サイズは自由に変更してね
							$imagurl_thumbnail=wp_get_attachment_image_src($img,'thumbnail'); //サイズは自由に変更してね
							if($imgurl){ ?>
								<li><a href="<? echo $imgurl[0]; ?>" data-lightbox="group"><img src="<? echo $imgurl[0]; ?>" alt="外観写真<?php echo $i;?>"></a></li>
							<? } 
						}?>	
					</ul>
					<h2>ZEHシュミレーション</h2>
					<table class="simulation">
						<tr>
							<th>
							</th>
							<th>
								ゼロエネルギーハウスの場合
							</th>
							<th>
								平成28年省エネ基準の場合
							</th>
							<th>
								支払い差額
							</th>
						</tr>
						<tr>
							<th>オールサポート価格<br>（フルローン）</th>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '建物本体金額(ゼロエネルギー)' ,true)); ?></td>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '建物本体金額(現在の省エネ住宅)' ,true)); ?></td>
							<?php $minus =(get_post_meta($post->ID , '建物本体金額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '建物本体金額(現在の省エネ住宅)' ,true)<0)?'minus':'';?>
							<td class="align-center <?php echo $minus;?>"><?php echo number_format(get_post_meta($post->ID , '建物本体金額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '建物本体金額(現在の省エネ住宅)' ,true)); ?></td>
						</tr>
						<tr>
							<th>月々の支払額<br>(住宅ローン＋光熱費)</th>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '月々の支払額(ローン・光熱費)(ゼロエネルギー)' ,true)); ?></td>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '月々の支払額(ローン・光熱費)(現在の省エネ住宅)' ,true)); ?></td>
							<?php $minus =(get_post_meta($post->ID , '月々の支払額(ローン・光熱費)(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '月々の支払額(ローン・光熱費)(現在の省エネ住宅)' ,true)<0)?'minus':'';?>
							<td class="align-center <?php echo $minus;?>"><?php echo number_format(get_post_meta($post->ID , '月々の支払額(ローン・光熱費)(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '月々の支払額(ローン・光熱費)(現在の省エネ住宅)' ,true)); ?></td>
						</tr>
						<tr>
							<th>1年の支払額<br>(住宅ローン＋光熱費)</th>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '1年間の支払額(ゼロエネルギー)' ,true)); ?></td>	
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '1年間の支払額(現在の省エネ住宅)' ,true)); ?></td>	
							<?php $minus =(get_post_meta($post->ID , '1年間の支払額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '1年間の支払額(現在の省エネ住宅)' ,true)<0)?'minus':'';?>
							<td class="align-center <?php echo $minus;?>"><?php echo number_format(get_post_meta($post->ID , '1年間の支払額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '1年間の支払額(現在の省エネ住宅)' ,true)); ?></td>	
						</tr>
						<tr>
							<th>ローン完済までの35年間の支払<br>(住宅ローン＋光熱費)</th>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '35年間の支払額(ゼロエネルギー)' ,true)); ?></td>	
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '35年間の支払額(現在の省エネ住宅)' ,true)); ?></td>	
							<?php $minus =(get_post_meta($post->ID , '35年間の支払額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '35年間の支払額(現在の省エネ住宅)' ,true)<0)?'minus':'';?>
							<td class="align-center <?php echo $minus;?>"><?php echo number_format(get_post_meta($post->ID , '35年間の支払額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '35年間の支払額(現在の省エネ住宅)' ,true)); ?></td>	
						</tr>
						<tr>
							<th>老後までの50年間の支払額<br>(住宅ローン＋光熱費)</th>
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '50年間の支払額(ゼロエネルギー)' ,true)); ?></td>	
							<td class="align-center"><?php echo number_format(get_post_meta($post->ID , '50年間の支払額(現在の省エネ住宅)' ,true)); ?></td>	
							<?php $minus =(get_post_meta($post->ID , '50年間の支払額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '50年間の支払額(現在の省エネ住宅)' ,true)<0)?'minus':'';?>
							<td class="align-center <?php echo $minus;?>"><?php echo number_format(get_post_meta($post->ID , '50年間の支払額(ゼロエネルギー)' ,true)-get_post_meta($post->ID , '50年間の支払額(現在の省エネ住宅)' ,true)); ?></td>	
						</tr>
					</table>
					
					<h2>間取り図</h2>
					<?php
					//間取り図
					for($i=1;$i<3;$i++){
						$img = get_post_meta($post->ID , '間取り図'.$i ,true);
						$imgurl = wp_get_attachment_image_src($img, 'large'); //サイズは自由に変更してね
						if($imgurl){ ?>
							<img src="<? echo $imgurl[0]; ?>" alt="間取り図<?php echo $i;?>">
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
