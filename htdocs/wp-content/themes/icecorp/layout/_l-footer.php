<footer class="l-footer">
	<div class="l-footer-page-top">
		<div class="l-footer-page-top-btn">
			<?php importTemplate( 'module/_bordered-link', array(
				'id'       => 'js-page-top',
				'href'     => '#js-body',
				'modifier' => 'bordered-link-width-small bordered-link-left',
				'text'     => 'PAGE TOP'
			) ); ?>
		</div>
	</div>

	<div class="l-container">
		<div class="l-footer-inner">
			<div class="l-footer-left">
				<div class="footer-logo-list l-grid l-grid-lg-col2 l-grid-col1">
					<ul class="footer-logo-list-inner l-grid-inner">
						<li class="footer-logo-list-item footer-logo-list-item-ice l-grid-item">
							<div class="footer-logo-item footer-logo-item-ice">
								<a class="footer-logo-item-link" href="<?php echo HOME_URL; ?>">
									<span class="footer-logo-item-icon footer-logo-item-icon-ice">
										<?php importTemplate( 'module/_logo' ); ?>
									</span>
								</a>
							</div>
						</li>
						<li class="footer-logo-list-item footer-logo-list-item-impress">
							<div class="footer-logo-item footer-logo-item-impress">
								<a class="footer-logo-item-link" href="<?php echo IMPRESS_URL; ?>"
								   target="_blank">
									<span class="footer-logo-item-icon footer-logo-item-icon-impress">
										<img src="<?php echo IMAGE_URI; ?>impress-logo.png" alt="impress">
									</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="l-footer-right">
				<div class="footer-page-list u-sp-hidden">
					<ul class="footer-page-list-inner">

						<li class="footer-page-list-item">
							<a class="footer-page-item" href="<?php echo resolve_archive_uri( SERVICE_POST_TYPE ); ?>">
								<span class="footer-page-item-text"><?php echo SERVICE_TEXT_EN; ?></span>
							</a>
						</li>

						<li class="footer-page-list-item">
							<a class="footer-page-item"
							   href="<?php echo resolve_archive_uri( WORKS_POST_TYPE ); ?>">
								<span class="footer-page-item-text"><?php echo WORKS_TEXT_EN; ?></span>
							</a>
						</li>

						<li class="footer-page-list-item">
							<a class="footer-page-item" href="<?php echo resolve_archive_uri( NEWS_POST_TYPE ); ?>">
								<span class="footer-page-item-text"><?php echo NEWS_TEXT_EN; ?></span>
							</a>
						</li>

						<li class="footer-page-list-item">
							<a class="footer-page-item" href="<?php echo COMPANY_URL; ?>">
								<span class="footer-page-item-text"><?php echo COMPANY_TEXT_EN; ?></span>
							</a>
						</li>

						<li class="footer-page-list-item">
							<a class="footer-page-item" href="<?php echo CONTACT_URL; ?>">
								<span class="footer-page-item-text"><?php echo CONTACT_TEXT_EN; ?></span>
							</a>
						</li>

					</ul>
				</div>

				<div class="footer-link-list">
					<ul class="footer-link-list-inner u-clear">

						<li class="footer-link-list-item">
							<a class="footer-link-item" href="<?php echo ABOUT_IMPRESS_URL; ?>" target="_blank">
								<span class="footer-link-item-text"><?php echo ABOUT_IMPRESS_TEXT_JP; ?></span>
								<i class="footer-link-item-icon icon icon-external-link"></i>
							</a>
						</li>
						<li class="footer-link-list-item">
							<a class="footer-link-item" href="<?php echo PRIVACY_URL; ?>" target="_blank">
								<div class="footer-link-item-inner">
									<span class="footer-link-item-text"><?php echo PRIVACY_TEXT_JP; ?></span>
									<i class="footer-link-item-icon icon icon-external-link"></i>
								</div>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>

		<div class="l-footer-copyright">
			<small>&copy; ICE Inc., an Impress Group company.</small>
		</div>
	</div>
</footer>