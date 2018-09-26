<?php
/**
 * TOPページ
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>
<?php importTemplate( 'layout/_l-header' ); ?>
	<div class="l-wrap" id="js-wrap">
		<main>
			<div class="parallax">
				<?php importTemplate( 'module/_parallax-items' ); ?>
				<div class="l-hero" id="js-hero-section">
					<div class="l-hero-catch">
						<div class="hero" id="js-hero-content">
							<div class="l-container">
								<div class="hero-inner">
									<h1 class="hero-title">
										CREATING NEW VALUE<br class="u-sp-hidden">
										OF CONTENT<br>
										AND ONLINE MEDIA
									</h1>

                  <p class="hero-sub">コンテンツとオンラインメディアを活用して、<br class="u-sp-hidden">新しい価値を創造する。</p>

									<div class="hero-underline">
										<?php importTemplate( 'module/_wave-underline', array(
											'modifier' => 'wave-underline-long'
										) ); ?>
									</div>

									<p class="hero-desc">
										日々進化を続ける、WEB・モバイルのテクノロジーをフル活用して、<br class="u-sp-hidden">
										サービスを提供しております。<br>
										もっと面白く、もっと価値のあるモノを創造し、<br class="u-sp-hidden">
										世に送り出すためにスタッフ全員でチャレンジしています。
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="l-hero-latest-article">
						<div class="l-container">
							<?php while ( have_posts() ) {
								the_post();

								importTemplate( 'module/_latest-article', array(
									'category'  => 'NEWS',
									'title'     => get_the_content(),
									'date'      => get_the_time( 'Y.m.d' ),
									'date_time' => get_the_time( 'Y-m-d' ),
									'link'      => resolve_archive_uri( NEWS_POST_TYPE )
								) );
							}
							?>
						</div>
					</div>

					<div class="l-hero-scroll">
						<?php importTemplate( 'module/_bordered-link', array(
							'href'     => '#section-process',
							'modifier' => 'bordered-link-width-default bordered-link-right is-active',
							'text'     => 'SCROLL DOWN'
						) ); ?>
					</div>
				</div>

				<section class="l-section l-section-process js-" id="section-process">
					<div class="l-section-inner">
						<div class="l-container">
							<div class="l-section-head js-section-head">
								<?php importTemplate( 'module/_heading', array(
									'h'                => 2,
									'modifier'         => 'heading-process',
									'text'             => 'ONE STOP',
									'sub'              => 'ご相談から、企画開発、運営、<br class="u-pc-hidden">サポートまでをワンストップで。',
									'underline_params' => array(
										'modifier' => 'wave-underline-short'
									)
								) ); ?>
							</div>

							<div class="l-section-body js-section-body">
								<div class="process-list l-grid l-grid-col4 l-grid-lg-col1">
									<ol class="process-list-inner l-grid-inner">

										<li class="process-list-item l-grid-item">


											<div class="process-item ">
												<div class="process-item-number">
													01
												</div>
												<div class="process-item-group">
													<div class="process-item-svg process-item-svg-chat-bubble">
														<?php importTemplate( 'svg/_chat-bubble' ); ?>
													</div>
													<div class="process-item-text">
														ご相談
													</div>
												</div>
											</div>
										</li>

										<li class="process-list-item l-grid-item">


											<div class="process-item ">
												<div class="process-item-number">
													02
												</div>
												<div class="process-item-group">
													<div class="process-item-svg process-item-svg-shapes">
														<?php importTemplate( 'svg/_shapes' ); ?>
													</div>
													<div class="process-item-text">
														企画開発
													</div>
												</div>
											</div>
										</li>

										<li class="process-list-item l-grid-item">


											<div class="process-item ">
												<div class="process-item-number">
													03
												</div>
												<div class="process-item-group">
													<div class="process-item-svg process-item-svg-ship-wheel">
														<?php importTemplate( 'svg/_ship-wheel' ); ?>
													</div>
													<div class="process-item-text">
														運営
													</div>
												</div>
											</div>
										</li>

										<li class="process-list-item l-grid-item">


											<div class="process-item ">
												<div class="process-item-number">
													04
												</div>
												<div class="process-item-group">
													<div class="process-item-svg process-item-svg-headset">
														<?php importTemplate( 'svg/_headset' ); ?>
													</div>
													<div class="process-item-text">
														サポート
													</div>
												</div>
											</div>
										</li>

									</ol>
								</div>
							</div>

							<div class="l-section-footer js-section-footer">
								<p class="default-text">
									ICEでは、クライアント様の案件に応じて最適なチームを組み、<br class="u-sp-hidden">
									デジタルサービスにおける企画・開発・運営・サポートまでをワンストップでご提供させていただきます。
								</p>
								<p class="default-text">
									アプリ開発、サイト運営で蓄積された豊富なノウハウを活かし、<br class="u-sp-hidden">
									制作コストや実施計画などコンサルティングベースのお話からスタートさせていただくことも可能です。
								</p>
								<p class="default-text">
									まずはお気軽にご相談ください。
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="l-section l-section-works" id="js-works-section">
					<div class="l-section-inner">
						<div class="l-container">
							<div class="outline-border outline-border-process"></div>
							<div class="l-section-head js-section-head">
								<?php importTemplate( 'module/_heading', array(
									'h'                => 2,
									'modifier'         => 'heading-centered',
									'text'             => 'SOLUTION',
									'sub'              => 'パートナーブランド事業',
									'underline_params' => array(
										'modifier' => 'wave-underline-short'
									)
								) ); ?>
							</div>

							<div class="l-section-body js-section-body">
								<?php
								$works_posts       = get_field( WORKS_LIST_FOR_INDEX_PAGE_OPTIONS, 'options' );
								$works_posts_count = sizeof( $works_posts );
								?>
								<?php if ( $works_posts_count > 0 ): ?>
									<div
										class="article-card-list article-card-list-works l-grid l-grid-col3 l-grid-lg-col1">
										<ul class="article-card-list-inner l-grid-inner">
											<?php foreach ( $works_posts as $item ) : ?>
												<li class="article-card-list-item l-grid-item">
													<?php
													$image_url     = get_eyecatch_data( $item->ID, CARD_EYECATCH );
													$thumbnail_url = get_field( WORKS_CUSTOM_FIELD_THUMBNAIL, $item );
													$thumbnail_url = get_thumbnail_data( $thumbnail_url, CARD_THUMBNAIL );

													importTemplate( 'module/_article-card-item', array(
														'h'             => 3,
														'modifier'      => 'article-card-item-with-avatar js-card-works',
														'link'          => get_permalink( $item ),
														'title'         => get_the_title( $item ),
														'excerpt'       => get_the_excerpt( $item ),
														'image_url'     => $image_url,
														'thumbnail_url' => $thumbnail_url
													) ); ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>

							<div class="l-section-footer js-section-footer">
								<?php importTemplate( 'module/_button', array(
									'tag'         => 'a',
									'href'        => resolve_archive_uri( WORKS_POST_TYPE ),
									'modifier'    => 'button-bg-default button-width-default',
									'variation'   => 'with-icon',
									'text'        => 'パートナーブランド事業<br class="u-pc-hidden">一覧をみる',
									'icon_params' => array(
										'modifier' => 'button-icon-right',
										'icon'     => 'arrow-icon-right'
									)
								) ); ?>
							</div>
						</div>
					</div>
				</section>

				<section class="l-section l-section-service" id="js-service-section">
					<div class="l-section-inner">
						<div class="l-container">
							<div class="outline-border"></div>
							<div class="l-section-head js-section-head">
								<?php importTemplate( 'module/_heading', array(
									'h'                => 2,
									'modifier'         => 'heading-centered',
									'text'             => 'CONTENT',
									'sub'              => '自社ブランド事業',
									'underline_params' => array(
										'modifier' => 'wave-underline-short'
									)
								) ); ?>
							</div>

							<div class="l-section-body js-section-body">
								<?php
								$service_posts       = get_field( SERVICE_LIST_FOR_INDEX_PAGE_OPTIONS, 'options' );
								$service_posts_count = sizeof( $service_posts );
								?>
								<?php if ( $service_posts_count > 0 ): ?>
									<div
										class="article-card-list article-card-list-service l-grid l-grid-col3 l-grid-lg-col1">
										<ul class="article-card-list-inner l-grid-inner">
											<?php foreach ( $service_posts as $item ) : ?>
												<li class="article-card-list-item article-card-list-item-service l-grid-item">
													<?php
													$image_url = get_eyecatch_data( $item->ID, CARD_EYECATCH );

													importTemplate( 'module/_article-card-item', array(
														'h'         => 3,
														'modifier'  => 'js-card-service',
														'link'      => get_permalink( $item ),
														'title'     => get_the_title( $item ),
														'excerpt'   => get_the_excerpt( $item ),
														'image_url' => $image_url
													) ); ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>

							<div class="l-section-footer js-section-footer">
								<?php importTemplate( 'module/_button', array(
									'tag'         => 'a',
									'href'        => resolve_archive_uri( SERVICE_POST_TYPE ),
									'modifier'    => 'button-bg-default button-width-default',
									'variation'   => 'button-with-icon',
									'text'        => '自社ブランド事業<br class="u-pc-hidden">一覧をみる',
									'icon_params' => array(
										'modifier' => 'button-icon-right',
										'icon'     => 'arrow-icon-right'
									)
								) ); ?>
							</div>
						</div>
					</div>
				</section>
				<?php importTemplate( 'module/_banner-list' ); ?>
				<?php importTemplate( 'module/_contact' ); ?>
			</div>
		</main>
		<?php importTemplate( 'layout/_l-footer' ); ?>
	</div>
<?php get_footer(); ?>