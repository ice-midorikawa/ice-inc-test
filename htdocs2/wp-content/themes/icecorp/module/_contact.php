<section class="l-section l-section-contact l-section-bg-yellow" id="js-contact-section">
    <div class="contact-shapes contact-shapes-contact-top">
        <div class="contact-shapes-inner">
            <div class="triangle triangle-bg-yellow triangle-sm triangle-sm-with-clone"></div>
        </div>
    </div>
    <div class="contact-shapes contact-shapes-contact-bottom">
        <div class="contact-shapes-inner">
            <div class="triangle triangle-bg-yellow triangle-lg triangle-lg-with-clone"></div>
        </div>
    </div>
    
	<div class="l-section-inner">
		<div class="l-container">
			<div class="outline-border outline-border-with-btn-large"></div>
            <div class="l-section-head js-section-head">
				<?php importTemplate( 'module/_heading', array(
					'h'                => 2,
					'modifier'         => 'heading-centered',
					'text'             => 'CONTACT',
					'sub'              => 'お問い合わせ',
					'underline_params' => array(
						'modifier' => 'wave-underline-short'
					)
				) ); ?>
			</div>

            <div class="l-section-body js-section-body">
				<p class="default-text">
					ICEでは、書籍やマンガ、音楽、ファッション、動画などのコンテンツをデジタル配信する事業で<br class="u-sp-hidden">
					蓄積した実績・経験を活かして、御社の課題やニーズ、展開するサービス、ターゲット、プラットフォームに合わせて、<br class="u-sp-hidden">
					最適なオーダーメイドのご提案をさせていただきます。
				</p>
			</div>

            <div class="l-section-footer js-section-footer">
				<?php importTemplate( 'module/_button', array(
					'tag'         => 'a',
					'href'        => CONTACT_URL,
					'modifier'    => 'button-bg-black button-width-large  button-pd-large',
					'text'        => 'お問い合わせは<br class="u-pc-hidden">こちらから',
					'variation'   => 'button-with-icon',
					'icon_params' => array(
						'modifier' => 'button-icon-right u-pc-hidden',
						'icon'     => 'arrow-icon-right'
					)
				) ); ?>
			</div>
		</div>
	</div>
</section>