<?php
/**
 * アーカイブ(一覧)ページ
 *
 * @package WordPress
 */
?>
<?php
$post_type     = get_post_type();
$template_data = array(
	WORKS_POST_TYPE   => array(
		'section_id'                 => 'js-works-section',
		'section_modifier'           => 'l-section-works-page',
		'outline_modifier'           => 'outline-border-no-btn',
		'heading_text'               => 'SOLUTION',
		'heading_sub'                => 'パートナーブランド事業',
		'article_card_item_modifier' => 'article-card-item-with-avatar article-card-item-with-platform js-card-works'
	),
	SERVICE_POST_TYPE => array(
		'section_id'                 => 'js-service-section',
		'section_modifier'           => 'l-section-service-page',
		'outline_modifier'           => 'outline-border-service',
		'heading_text'               => 'CONTENT',
		'heading_sub'                => '自社ブランド事業',
		'article_card_item_modifier' => 'js-card-service'
	),
	NEWS_POST_TYPE    => array(
		'section_id'       => 'js-news-section',
		'section_modifier' => 'l-section-news',
		'outline_modifier' => 'outline-border-news',
		'heading_text'     => 'NEWS',
		'heading_sub'      => 'ニュース'
	)
);
?>
<?php get_header(); ?>
<?php importTemplate( 'layout/_l-header' ); ?>
	<div class="l-wrap" id="js-wrap">
		<main>
			<div class="parallax">
				<?php importTemplate( 'module/_parallax-items' ); ?>
				<div
					class="l-section <?php echo $template_data[ $post_type ]['section_modifier']; ?>"
					id="<?php echo $template_data[ $post_type ]['section_id']; ?>">
					<div class="l-section-inner">
						<div class="l-container">
							<div
								class="outline-border <?php echo $template_data[ $post_type ]['outline_modifier']; ?>"></div>
							<div class="l-section-head js-section-head">
								<?php importTemplate( 'module/_heading', array(
									'h'                => 1,
									'modifier'         => 'heading-centered',
									'text'             => $template_data[ $post_type ]['heading_text'],
									'sub'              => $template_data[ $post_type ]['heading_sub'],
									'underline_params' => array(
										'modifier' => 'wave-underline-short'
									)
								) ); ?>
							</div>

							<div class="l-section-body js-section-body">
								<?php if ( $post_type === NEWS_POST_TYPE ): ?>
									<ul class="news-list">
										<?php while ( have_posts() ):the_post(); ?>
											<li>
												<?php importTemplate( 'module/_article-news-item', array(
													'h'         => 2,
													'modifier'  => 'item.modifier',
													'desc'      => wpautop( get_the_content() ),
													'date'      => get_the_time( 'Y.m.d' ),
													'date_time' => get_the_time( 'Y-m-d' )
												) ); ?>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php else: ?>
									<div
										class="article-card-list article-card-list-works l-grid l-grid-col3 l-grid-lg-col1">
										<ul class="article-card-list-inner l-grid-inner">
											<?php while ( have_posts() ):the_post(); ?>
												<li class="article-card-list-item l-grid-item">
													<?php
													$image_url     = get_eyecatch_data( get_the_ID(), CARD_EYECATCH );
													$thumbnail_url = false;
													$terms         = array();
													if ( $post_type === WORKS_POST_TYPE ) {
														$thumbnail_url = get_field( WORKS_CUSTOM_FIELD_THUMBNAIL );
														$thumbnail_url = get_thumbnail_data( $thumbnail_url, CARD_THUMBNAIL );

														$terms = wp_get_post_terms( get_the_ID(), WORKS_TAX_CAT, array(
															'orderby' => 'term_id'
														) );
													}

													importTemplate( 'module/_article-card-item', array(
														'h'             => 2,
														'modifier'      => $template_data[ $post_type ]['article_card_item_modifier'],
														'link'          => get_permalink(),
														'title'         => get_the_title(),
														'excerpt'       => get_the_excerpt(),
														'image_url'     => $image_url,
														'thumbnail_url' => $thumbnail_url,
														'terms'         => $terms
													) ); ?>
												</li>
											<?php endwhile; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>

						</div>
					</div>
				</div>
				<?php importTemplate( 'module/_contact' ); ?>
			</div>
		</main>
		<?php importTemplate( 'layout/_l-footer' ); ?>
	</div>
<?php get_footer(); ?>