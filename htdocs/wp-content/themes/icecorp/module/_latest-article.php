<article class="latest-article <?php echo $modifier; ?>" id="js-latest-article">
	<div class="latest-article-inner u-clear">
		<div class="latest-article-wrap">
			<div class="latest-article-wrap-bg"></div>
			<h1 class="latest-article-category">
				<?php echo $category; ?>
			</h1>
			<div class="latest-article-box u-clear">
				<time class="latest-article-date" datetime="<?php echo $date_time; ?>"><?php echo $date; ?></time>
				<div class="latest-article-title"><?php echo $title; ?></div>
			</div>
			<div class="latest-article-more">
				<a href="<?php echo $link; ?>">more</a>
			</div>
		</div>
	</div>
</article>