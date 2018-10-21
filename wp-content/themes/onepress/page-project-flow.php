<?php
/**
 *Template Name: Full Width - Contained Content
 *
 * @package OnePress
 */

get_header();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );
?>
	<div id="content" class="site-content">
        <?php
        onepress_breadcrumb();
        ?>
		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
					<div class="main">
						<div class="top"><img src="/wp-content/themes/onepress/assets/images/project-flow/top.png" alt="家族"/></div>
						<div>具体的な家づくりが始まる前に、どんな暮らし方がしたいかご家族で理想の暮らしについてぜひ考えてください。<br>
							「お子さんの教育方針は？」「介護が必要になったら？」<br>
							家づくりをきっかけに、ご家族の未来を本気で考えていただきます。
							親から子、孫へと住み継がれる家を建ててほしいから。ARCREAは、お客様の人生設計をお手伝いさせて頂きます。
						</div>
					</div>
					<div class="flow">
						<ul>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/start.png" alt="START"><div class="cercle"><span class="text">01<br>START</span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><div class="cercle"><span class="text">02<br><a href="/contact/">お問合せ<br>（メール・TEL）</a></span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/plan.png" alt="概算資金計画"><div class="cercle"><span class="text">03<br>概算資金計画</span></div></li>
						</ul>
						<ul class="flex-right">
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><a class="colorbox" href="#04" ><span class="text">04<br>土地探し<br>現場確認</span></a></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/hearing.png" alt="ヒアリング"><div class="cercle"><span class="text">05<br>ご要望<br>ヒアリング</span></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">06<br>トータル<br>コーディネート</span></div></li>
						</ul>
						<ul>
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><span class="text">07<br>プランニング</span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/presentation.png" alt="プレゼンテーション"><div class="cercle"><span class="text">08<br>プレゼンテーション</span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/design.png" alt="実施設計"><div class="cercle"><span class="text">09<br>実施設計</span></div></li>
						</ul>
						<ul class="flex-right">
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><span class="text">10<br>お見積り</span></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">11<br>請負契約</span></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">12<br>設計確認</span></div></li>
						</ul>
						<ul>
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><span class="text">13<br>地鎮祭</span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/construction.png" alt="着工"><div class="cercle"><span class="text">15<br>着工</span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><div class="cercle"><span class="text">16<br>現場確認</span></div></li>
						</ul>
						<ul class="flex-right">
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><span class="text">17<br>竣工</span></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/completion.png" alt="お引渡し"><div class="cercle"><span class="text">18<br>お引渡し</span></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">19<br>アフターサービス</span></div></li>
						</ul>
					</div>
					
					<div class="disp-none">
						<div id="04">
							<p>概算資金計画</p>
						</div>
					</div>
					<div class="disp-none" id="05">埋め込み</div>
					<div class="disp-none" id="07">埋め込み</div>
					<div class="disp-none" id="09">埋め込み</div>
					<div class="disp-none" id="11">埋め込み</div>
					<div class="disp-none" id="13">埋め込み</div>
					<div class="disp-none" id="15">埋め込み</div>
					<div class="disp-none" id="16">埋め込み</div>
					<div class="disp-none" id="18">埋め込み</div>
				

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
