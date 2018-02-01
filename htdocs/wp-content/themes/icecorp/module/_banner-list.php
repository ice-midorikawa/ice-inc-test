<?php
$banner_image_1 = get_field( BANNER_IMAGE_1, 'options' );
$banner_image_2 = get_field( BANNER_IMAGE_2, 'options' );
$banner_link_1  = get_field( BANNER_LINK_1, 'options' );
$banner_link_2  = get_field( BANNER_LINK_2, 'options' );

$banner_image_1 = get_thumbnail_data( $banner_image_1, INDEX_BANNER );
$banner_image_2 = get_thumbnail_data( $banner_image_2, INDEX_BANNER );

if ( !$banner_link_1 || sizeof( $banner_link_1 ) === 0 ) {
	$banner_link_1 = '#';
}

if ( !$banner_link_2 || sizeof( $banner_link_2 ) === 0 ) {
	$banner_link_2 = '#';
}
?>
<aside class="banner-list" id="js-banner">
	<div class="banner-list-inner">
		<div class="banner-list-grid l-grid l-grid-col2 l-grid-lg-col1">
			<ul class="banner-list-grid-inner l-grid-inner">
				<?php if ( $banner_image_1 ): ?>
					<li class="banner-list-grid-item l-grid-item">
						<a class="banner " href="<?php echo $banner_link_1; ?>">
							<img src="<?php echo $banner_image_1; ?>" alt="">
						</a>
					</li>
				<?php endif; ?>
				<?php if ( $banner_image_2 ): ?>
					<li class="banner-list-grid-item l-grid-item">
						<a class="banner " href="<?php echo $banner_link_2; ?>">
							<img src="<?php echo $banner_image_2; ?>" alt="">
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</aside>