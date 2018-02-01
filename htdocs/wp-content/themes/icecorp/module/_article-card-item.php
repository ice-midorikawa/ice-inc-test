<article class="article-card-item <?php echo $modifier; ?>">
	<a class="article-card-item-link" href="<?php echo $link; ?>">
		<div class="article-card-item-thumb">
			<div class="article-card-item-img"
			     style="background-image: url(<?php echo ( $image_url ) ? $image_url : NOIMAGE; ?>);"></div>
		</div>
		<div class="article-card-item-meta u-clear">
			<?php if ( strpos( $modifier, 'article-card-item-with-avatar' ) !== false ): ?>
				<?php if ( $thumbnail_url ): ?>
					<div class="article-card-item-avatar"
					     style="background-image: url(<?php echo $thumbnail_url; ?>);"></div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="article-card-item-title">
				<div class="article-card-item-title-top"><?php echo $excerpt; ?></div>
				<h3 class="article-card-item-title-bottom"><?php echo $title; ?></h3>
			</div>
			<?php if ( strpos( $modifier, 'article-card-item-with-platform' ) !== false ): ?>
				<?php if ( sizeof( $terms ) > 0 ): ?>
					<div class="article-card-item-platform">
						<ul class="article-card-item-platform-list">
							<?php foreach ( $terms as $term ) : ?>
								<li class="article-card-item-platform-item"><?php echo $term->name; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</a>
</article>