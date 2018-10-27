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
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/plan.png" alt="概算資金計画"><div class="cercle"><a class="colorbox" href="#03"><span class="text">03<br>概算資金計画</span></a></div></li>
						</ul>
						<ul class="flex-right">
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><a class="colorbox" href="#04"><span class="text">04<br>土地探し<br>現場確認</span></a></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/hearing.png" alt="ヒアリング"><div class="cercle"><a class="colorbox" href="#05"><span class="text">05<br>ご要望<br>ヒアリング</span></a></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">06<br>トータル<br>コーディネート</span></div></li>
						</ul>
						<ul>
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><a class="colorbox" href="#07"><span class="text">07<br>プランニング</span></a></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/presentation.png" alt="プレゼンテーション"><div class="cercle"><span class="text">08<br>プレゼンテーション</span></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/design.png" alt="実施設計"><div class="cercle"><a class="colorbox" href="#09"><span class="text">09<br>実施設計</span></a></div></li>
						</ul>
						<ul class="flex-right">
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><a class="colorbox" href="#10"><span class="text">10<br>お見積り</span></a></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><a class="colorbox" href="#11"><span class="text">11<br>請負契約</span></a></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">12<br>設計確認</span></div></li>
						</ul>
						<ul>
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><a class="colorbox" href="#13"><span class="text">13<br>地鎮祭</span></a></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/construction.png" alt="着工"><div class="cercle"><a class="colorbox" href="#15"><span class="text">15<br>着工</span></a></div></li>
							<li><img class="arrow turn-right" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-right.svg" alt="右矢印"></li>
							<li><div class="cercle"><a class="colorbox" href="#16"><span class="text">16<br>現場確認</span></a></div></li>
						</ul>
						<ul class="flex-right">
							<li><img class="arrow-down" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-down.svg" alt="下矢印"><div class="cercle"><span class="text">17<br>竣工</span></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><img src="/wp-content/themes/onepress/assets/images/project-flow/completion.png" alt="お引渡し"><a class="colorbox" href="#18"><div class="cercle"><span class="text">18<br>お引渡し</span></a></div></li>
							<li><img class="arrow turn-left" src="/wp-content/themes/onepress/assets/images/project-flow/arrow-left.svg" alt="左矢印"></li>
							<li><div class="cercle"><span class="text">19<br>アフターサービス</span></div></li>
						</ul>
					</div>
					
					<div class="disp-none">
						<div id="03" class="pop-up">		
							<p class="popup-title">お客様に最適な資金計画をご提案いたします</p>
							<p>予算に合わせて、部材や設備・仕様など細かい部分までご相談させていただき、<br>
							プランの概算見積もりと資金計画を提案いたします。合わせて住宅ローンの相談も承ります。</p>
						</div>
						<div id="04" class="pop-up flex">
							<div class="flexbox">
								<p class="popup-title">土地探しをしている方</p>
								<p>敷地調査、土地探しサポートも承っております。<br>
								お客様の想定している条件を教えて下さい。<br>
								立地条件・広さ・価格などのご要望を伺い、<br>
								ご希望の土地情報をご提案いたします。</p>
							</div>
							<div class="flexbox">
								<p class="popup-title">土地はお持ちの方</p>
								<p>思い描いている家が建てられるのか確認いたします。
								土地にかかる制限の確認、電気ガスなどの敷地調査、地盤調査を行います。
								調査結果に基づき、地盤改良の有無、規制、法的手続きの方法などを状況に応じてご説明いたします。<br>
								建て替えの場合は、解体費用、仮住まいのご相談も承ります。</p>
							</div>
						</div>
						<div id="05" class="pop-up">		
							<p class="popup-title">こんなご要望にお応えします</p>
							<ul>
								<li>2世帯住宅にしたいけど、キッチンとトイレは別にしたい</li>
								<li>天井の高い家にしたい。吹き抜けにすると寒いって聞くけど、実際に寒いの？</li>
								<li>家事がしやすい間取りってどんなの？家事動線って何？</li>
								<li>かっこいい家に住みたいな。住宅デザイナーさんに入ってほしいな。</li>
							</ul>
						</div>
						<div id="07" class="pop-up">		
							<p class="popup-title">プランニング</p>
							<p>
								打合せには、イメージ写真・パースなどを盛り込んだ盛り込んだプレゼンボードなどを用い、分かりやすく提示することを心がけています。<br>
								じっくりとプランを考えましょう。<br>
								仕様・設備の検討もだいたいこの時点で。必要な機能・ランクを選びます。（見積もりに反映します）<br>
								概算見積もりの作成。プランの段階で、コストを考えながら組み立てる必要があります。<br>
								お客様の希望・予算を現実にするための調整も、建築士の大事な仕事です。
							</p>
						</div>
						<div id="09" class="pop-up">		
							<p class="popup-title">実施設計</p>
							<p>
								基本設計図をもとに、より具体的かつ詳細な内容の打合せを行い、仕様やデザインなど、細部の検討を行います。これらをまとめた「実施設計図」を作成します。<br>
								実施設計図とは工事に必要な図面で、「建築」「構造」「電気」「設備」など、A3判の場合で約30枚になります。仕上材やスイッチ・コンセントの位置など細部まで確認していきます。同時に敷地の地盤調査を行います。
							</p>
						</div>
						<div id="10" class="pop-up">		
							<p class="popup-title">お見積り</p>
							<img src="/wp-content/themes/onepress/assets/images/project-flow/popup/estimate.png" alt="お見積り">
							<p>
								実施設計図をもとにお見積りを作成します。<br>
								明確に何にいくらかかるかが出ますので、必要に応じて仕様の調整を行い予算に納めていきます。
							</p>
						</div>
						<div id="11" class="pop-up">		
							<p class="popup-title">請負契約</p>
							<p>
								プラン内容、仕様等を納得いただけるまで、丁寧に打合せを重ねていき、正式にご契約となります。<br>
								※請負金額の5％
							</p>
						</div>
						<div id="13" class="pop-up">		
							<p class="popup-title">地鎮祭</p>
							<img src="/wp-content/themes/onepress/assets/images/project-flow/popup/zichinsai.png"　alt="地鎮祭">
							<p>
								工事を無事に終えることができるように神主様に土地を清めてもらいます。<br>
								※お客様のご希望により行います。<br>
								近隣へのご挨拶をして工事のはじまりです。
							</p>
						</div>
						<div id="15" class="pop-up">		
							<p class="popup-title">着工</p>
							<img src="/wp-content/themes/onepress/assets/images/project-flow/popup/start.png"　alt="着工">
							<p>
								建築確認等の許可がおり、地鎮祭を経て、いよいよ基礎工事がスタートします。当社では、下請け会社に施工をゆだねるのではなく、熟練した経験豊富な直轄の職人による施工をいたします。
								また、現場との綿密な連携体制を整えることで、ミスや施工上の不備を防いでいます。プロとしての誇りと責任をもって、お客様の家づくりに取り組んでいます。<br>
								※請負金額の25%（着工時）　※請負金額の25％（建て方時）
							</p>
						</div>
						<div id="16" class="pop-up">		
							<p class="popup-title">現場確認</p>
							<p>
								施主様、現場監督、コーディネーター、関連業者が、建築中の現場に集まり、照明配線、スイッチ位置、棚の高さ等、図面上では確認しにくい仕様を現地で見て確認・決定します。<br>
								※請負金額の25%（外装完了時）
							</p>
						</div>
						<div id="18" class="pop-up">		
							<p class="popup-title">お引渡し</p>
							<img src="/wp-content/themes/onepress/assets/images/project-flow/popup/completion.png"　alt="完成">
							<p>
								工事完了の申請手続きを行い、家具等備品の納入や造園工事等の監理をし、引き渡しのための最終チェックをします。<br>
								最終チェックの手直しをすませると、竣工写真の撮影、完成内覧会を行う場合もございます。その後引き渡しとなります。<br>
								※請負金額の20%
							</p>
						</div>
						
					</div>
				

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
