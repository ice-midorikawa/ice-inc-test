<header class="l-header">
	<div class="u-clear">
		<div class="content-overlay" id="js-overlay"></div>
		<div class="l-header-left">
			<a class="l-header-logo" href="<?php echo HOME_URL; ?>">
				<?php importTemplate( 'module/_logo' ); ?>
			</a>
		</div>

		<div class="l-header-right">
			<button class="nav-menu u-pc-hidden js-nav-btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<nav id="js-nav-menu" class="nav">
				<div class="nav-inner">
					<div class="u-pc-hidden u-clear">
						<a class="nav-logo" href="<?php echo HOME_URL; ?>">
							<?php importTemplate( 'module/_logo' ); ?>
						</a>
						<div class="nav-close">
							<button class="nav-close-btn js-nav-btn" type="button">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
					<ul class="nav-list">

						<li class="nav-list-item u-pc-hidden">
							<a class="nav-item" href="<?php echo HOME_URL; ?>">
								<span class="nav-item-en"><?php echo TOP_TEXT_EN; ?></span>
								<span class="nav-item-jp"><?php echo TOP_TEXT_JP; ?></span>
							</a>
						</li>

						<li class="nav-list-item ">
							<a class="nav-item nav-item-long-text" href="<?php echo resolve_archive_uri( SERVICE_POST_TYPE ); ?>">
								<span class="nav-item-en"><?php echo SERVICE_TEXT_EN; ?></span>
								<span class="nav-item-jp"><?php echo SERVICE_TEXT_JP; ?></span>
							</a>
						</li>

						<li class="nav-list-item ">
							<a class="nav-item" href="<?php echo resolve_archive_uri( WORKS_POST_TYPE ); ?>">
								<span class="nav-item-en"><?php echo WORKS_TEXT_EN; ?></span>
								<span class="nav-item-jp"><?php echo WORKS_TEXT_JP; ?></span>
							</a>
						</li>

						<li class="nav-list-item ">
							<a class="nav-item" href="<?php echo resolve_archive_uri( NEWS_POST_TYPE ); ?>">
								<span class="nav-item-en"><?php echo NEWS_TEXT_EN; ?></span>
								<span class="nav-item-jp"><?php echo NEWS_TEXT_JP; ?></span>
							</a>
						</li>

						<li class="nav-list-item ">
							<a class="nav-item" href="<?php echo COMPANY_URL; ?>">
								<span class="nav-item-en"><?php echo COMPANY_TEXT_EN; ?></span>
								<span class="nav-item-jp"><?php echo COMPANY_TEXT_JP; ?></span>
							</a>
						</li>

						<li class="nav-list-item ">
							<a class="nav-item" href="<?php echo CONTACT_URL; ?>">
								<span class="nav-item-en"><?php echo CONTACT_TEXT_EN; ?></span>
								<span class="nav-item-jp"><?php echo CONTACT_TEXT_JP; ?></span>
							</a>
						</li>

					</ul>
				</div>
				<div class="nav-underline u-pc-hidden">
					<?php importTemplate( 'module/_wave-underline', array(
						'modifier' => 'wave-underline-long wave-underline-nav'
					) ); ?>
				</div>
			</nav>

		</div>
	</div>
</header>
