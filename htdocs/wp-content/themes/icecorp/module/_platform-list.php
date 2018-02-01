<div class="platform-list l-grid l-grid-col2 l-grid-md-col2 l-grid-sm-col2">
	<ul class="platform-list-inner l-grid-inner u-clear">
		<?php if ( strlen( $app_store_url ) > 0 ): ?>
			<li class="l-grid-item platform-list-item">
				<a href="<?php echo $app_store_url; ?>" class="platform-link" target="_blank">
					<div class="platform-link-inner">
						<span class="platform-link-icon">
							<i class="icon icon-apple2"></i>
						</span>
						<div class="platform-link-text">
							<span class="platform-link-text-small">DOWNLOAD ON THE</span>
							<span class="platform-link-text-large">APP STORE</span>
						</div>
					</div>
				</a>
			</li>
		<?php endif; ?>
		<?php if ( strlen( $google_play_url ) > 0 ): ?>
			<li class="l-grid-item platform-list-item">
				<a href="<?php echo $google_play_url; ?>" class="platform-link" target="_blank">
					<div class="platform-link-inner u-clear">
						<span class="platform-link-icon">
							<i class="icon icon-android2"></i>
						</span>
						<div class="platform-link-text">
							<span class="platform-link-text-small">ANDROID APP ON</span>
							<span class="platform-link-text-large">GOOGLE PLAY</span>
						</div>
					</div>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
