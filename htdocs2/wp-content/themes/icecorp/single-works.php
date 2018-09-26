<?php
/**
 * 詳細ページ
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>
<?php importTemplate( 'layout/_l-header' ); ?>
<div class="l-wrap" id="js-wrap">
	<?php while ( have_posts() ): the_post(); ?>
		<main>
			<div class="parallax">
				<?php importTemplate( 'module/_parallax-items' ); ?>
				<div class="l-section l-section-detail-page" id="js-works-detail-section">
					<div class="l-section-inner">
						<div class="l-container">
							<div
								class="l-section-head page-detail-head js-section-head <?php echo ( !has_post_thumbnail() ) ? 'page-detail-head-no-image' : '' ?>">
								<div class="page-detail-head-inner">
									<div class="page-detail-head-box u-clear">

										<div class="page-detail-head-title">
											<div class="u-clear">
												<div class="page-detail-head-title-category">
													<div class="page-detail-head-icon">
														<?php
														$terms = wp_get_post_terms( get_the_ID(), WORKS_TAX_CAT, array(
															'orderby' => 'term_id'
														) );

														$categories = array(
															WORKS_CAT_SLUG_IOS     => '<i class="icon icon-apple"></i>',
															WORKS_CAT_SLUG_ANDROID => '<i class="icon icon-android"></i>',
															WORKS_CAT_SLUG_PC      => '<i class="icon icon-pc"></i>',
															WORKS_CAT_SLUG_KEITAI  => '<i class="icon icon-keitai"></i>'
														);
														?>
														<ul class="page-detail-head-icon-list">
															<?php foreach ( $terms as $term ): ?>
																<li class="page-detail-head-icon-item">
																	<?php echo $categories[ $term->slug ]; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													</div>
												</div>
												<?php importTemplate( 'module/_heading', array(
													'h'                => 1,
													'modifier'         => 'heading-detail-page',
													'text'             => '',
													'sub'              => get_the_title(),
													'underline_params' => array(
														'modifier' => 'wave-underline-short'
													)
												) ); ?>
											</div>
										</div>

										<div class="page-detail-head-float">
											<div class="page-detail-head-wrap">
												<div class="page-detail-head-wrap-thumb">
													<?php if ( has_post_thumbnail() ): ?>
														<img
															src="<?php echo get_eyecatch_data( get_the_ID(), SINGLE_EYECATCH ); ?>"
															alt="">
													<?php endif; ?>
												</div>
											</div>
										</div>

										<div class="page-detail-head-single-body">
											<div class="single-body">
												<?php the_content(); ?>
											</div>
										</div>

										<div class="client-list">
											<?php
											$work_details = get_field( WORKS_POST_WORK_DETAIL );
											?>
											<?php if ( sizeof( $work_details ) > 0 ): ?>
												<ul class="client-list-inner">
													<?php foreach ( $work_details as $item ): ?>
														<li class="client-list-item">
															<dl class="desc-list">
																<dt class="desc-list-term"><?php echo $item[ WORKS_POST_WORK_DETAIL_LABEL ]; ?></dt>
																<dd class="desc-list-detail"><?php echo $item[ WORKS_POST_WORK_DETAIL_DETAIL ]; ?></dd>
															</dl>
														</li>
													<?php endforeach; ?>
												</ul>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="l-section-body page-detail-body js-section-body">
								<div class="page-detail-body-inner">
									<div class="single-body">
										<?php
										$articles = get_field( WORKS_POST_ARTICLES );
										?>
										<?php foreach ( $articles as $item ): ?>
											<article>
												<h1><?php echo $item[ WORKS_POST_ARTICLES_TITLE ]; ?></h1>
												<?php echo $item[ WORKS_POST_ARTICLES_BODY ]; ?>
											</article>
										<?php endforeach; ?>
									</div>
								</div>
							</div>

							<div class="l-section-footer page-detail-footer js-section-footer">
								<div class="page-detail-footer-conversion">
									<div class="conversion-list l-grid l-grid-col2 l-grid-lg-col2 l-grid-md-col1 l-grid-sm-col1">
										<?php
										$app_store_link   = get_field( WORKS_POST_APP_STORE_LINK );
										$google_play_link = get_field( WORKS_POST_GOOGLE_PLAY_LINK );
										$website_link     = get_field( WORKS_POST_WEBSITE_LINK );
										?>
										<?php if ( strlen( $app_store_link ) > 0 || strlen( $google_play_link ) > 0 || strlen( $website_link ) > 0 ): ?>
											<ul class="conversion-list-inner l-grid-inner">
												<?php if ( strlen( $app_store_link ) > 0 || strlen( $google_play_link ) > 0 ): ?>
													<li class="l-grid-item conversion-list-item">
														<?php importTemplate( 'module/_platform-list', array(
															'app_store_url'   => $app_store_link,
															'google_play_url' => $google_play_link
														) ); ?>
													</li>
												<?php endif; ?>
												<?php if ( strlen( $website_link ) > 0 ): ?>
													<li class="l-grid-item conversion-list-item">
														<div class="website-link">
															<?php importTemplate( 'module/_button', array(
																'tag'         => 'a',
																'href'        => $website_link,
																'target'      => '_blank',
																'modifier'    => 'button-font-bree button-text-centered button-bg-default button-width-external-link button-external-link2',
																'variation'   => 'button-with-icon',
																'text'        => 'Website',
																'icon_params' => array(
																	'modifier' => 'button-icon-right button-icon-external-link2',
																	'icon'     => 'icon-external-link2'
																)
															) ); ?>
														</div>
													</li>
												<?php endif; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>

								<?php
								$pc_screenshot = get_field( WORKS_POST_WORK_SCREENSHOT_DESKTOP_SITE );
								$sp_screenshot = get_field( WORKS_POST_WORK_SCREENSHOT_MOBILE_SITE );
								?>
								<div class="page-detail-footer-catch page-detail-footer-catch-works">
									<div class="page-detail-footer-catch">
										<?php if ( !is_null( $pc_screenshot ) && $pc_screenshot ): ?>
											<div class="page-detail-footer-catch-pc u-sp-hidden">
												<img src="<?php echo $pc_screenshot; ?>" alt="">
											</div>
										<?php endif; ?>
										<?php if ( !is_null( $sp_screenshot ) && $sp_screenshot ): ?>
											<div class="page-detail-footer-catch-sp u-pc-hidden">
												<img src="<?php echo $sp_screenshot; ?>" alt="">
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php importTemplate( 'module/_contact' ); ?>
			</div>
		</main>
	<?php endwhile; ?>
	<?php importTemplate( 'layout/_l-footer' ); ?>
</div>
<?php get_footer(); ?>
