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
					<div class="l-section l-section-detail-page l-section-detail-page-service"
					     id="js-service-detail-section">
						<div class="l-section-inner">
							<div class="l-container">
								<div
									class="l-section-head page-detail-head js-section-head <?php echo ( !has_post_thumbnail() ) ? 'page-detail-head-no-image' : '' ?>">
									<div class="page-detail-head-inner">
										<div class="page-detail-head-box u-clear">

											<div class="page-detail-head-title">
												<div class="u-clear">
													<?php importTemplate( 'module/_heading', array(
														'h'                => 1,
														'modifier'         => 'heading-detail-page heading-service-detail',
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
										</div>
									</div>
								</div>

								<div class="l-section-body page-detail-body page-detail-body-service js-section-body">
									<div class="page-detail-body-inner">
										<div class="single-body">
											<?php
											$articles = get_field( SERVICE_POST_ARTICLES );
											?>
											<?php foreach ( $articles as $item ): ?>
												<article>
													<h1><?php echo $item[ SERVICE_POST_ARTICLES_TITLE ]; ?></h1>
													<?php echo $item[ SERVICE_POST_ARTICLES_BODY ]; ?>
												</article>
											<?php endforeach; ?>
										</div>
									</div>
								</div>

								<div class="l-section-footer page-detail-footer js-section-footer">

									<div class="page-detail-footer-conversion">
										<div class="conversion-list l-grid l-grid-col2 l-grid-lg-col2 l-grid-md-col1 l-grid-sm-col1">
											<?php
											$app_store_link   = get_field( SERVICE_POST_APP_STORE_LINK );
											$google_play_link = get_field( SERVICE_POST_GOOGLE_PLAY_LINK );
											$website_link     = get_field( SERVICE_POST_WEBSITE_LINK );
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
									$pc_screenshot = get_field( SERVICE_POST_SERVICE_SCREENSHOT_DESKTOP_SITE );
									$sp_screenshot = get_field( SERVICE_POST_SERVICE_SCREENSHOT_MOBILE_SITE );
									?>
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
					<?php importTemplate( 'module/_contact' ); ?>
				</div>
			</main>
		<?php endwhile; ?>
		<?php importTemplate( 'layout/_l-footer' ); ?>
	</div>
<?php get_footer(); ?>
