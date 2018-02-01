<?php
/**
 * 固定ページ
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>
<?php importTemplate( 'layout/_l-header' ); ?>
<div class="l-wrap" id="js-wrap">
	<main>
        <div class="parallax">
            <?php importTemplate( 'module/_parallax-items' ); ?>
            <section class="l-section l-section-contact-form" id="js-contact-form-section">
			<div class="l-section-inner">
				<div class="l-container">
					<div class="outline-border outline-border-contact-form"></div>
                    <div class="l-section-head js-section-head">
						<?php importTemplate( 'module/_heading', array(
							'h'                => 1,
							'modifier'         => 'heading-centered heading-contact-form',
							'text'             => 'CONTACT',
							'sub'              => 'お問い合わせ',
							'underline_params' => array(
								'modifier' => 'wave-underline-short'
							)
						) ); ?>
						<p class="default-text default-text-contact">
                            WEB/アプリなどのオンラインメディアや、電子書籍などのデジタルコンテンツに関してお困りではないでしょうか。<br class="u-sp-hidden">
                            新しいソリューションや技術、広告商品などの提案なども大歓迎です！<br class="u-sp-hidden">
                            下記にご要望を沿えて、お問い合わせください。折り返し担当者からご連絡を差し上げます。
						</p>
					</div>
					<div class="l-section-body js-section-body">
						<form class="form"
						      action="https://cgi2.impress.co.jp/servlet/entry/cda/entry_box_control_tran.jsp"
						      method="post" accept-charset="shift-jis">
							<div class="form-inner">

								<dl class="input-group u-clear">
									<dt class="input-group-label">
										<label class="input-label">
											<span class="input-label-text"><em>*</em>貴社名</span>
										</label>
									</dt>
									<dd class="input-group-desc">
										<input class="input input-text" type="text" name="q1_1">
									</dd>
								</dl>

								<dl class="input-group u-clear">
									<dt class="input-group-label">
										<label class="input-label">
											<span class="input-label-text"><em>*</em>お名前</span>
										</label>
									</dt>
									<dd class="input-group-desc">
										<input class="input input-text" type="text" name="q2_1">
									</dd>
								</dl>

								<dl class="input-group u-clear">
									<dt class="input-group-label">
										<label class="input-label">
											<span class="input-label-text"><em>*</em>かな(お名前)</span>
										</label>
									</dt>
									<dd class="input-group-desc">
										<input class="input input-text" type="text" name="q3_1">
									</dd>
								</dl>

								<dl class="input-group u-clear">
									<dt class="input-group-label">
										<label class="input-label">
											<span class="input-label-text"><em>*</em>お電話番号</span>
										</label>
									</dt>
									<dd class="input-group-desc">
										<input class="input input-text" type="text" name="q4_1">
									</dd>
								</dl>

                                <dl class="input-group u-clear">
                                    <dt class="input-group-label">
                                        <label class="input-label">
                                            <span class="input-label-text"><em>*</em>メールアドレス</span>
                                        </label>
                                    </dt>
                                    <dd class="input-group-desc">
                                        <input class="input input-text" type="text" name="q5_1">
                                    </dd>
                                </dl>

                                <dl class="input-group u-clear">
                                    <dt class="input-group-label">
                                        <label class="input-label input-label-long-text">
                                            <span class="input-label-text"><em>*</em>確認のために、もう一度入力してください。</span>
                                        </label>
                                    </dt>
                                    <dd class="input-group-desc">
                                        <input class="input input-text" type="text" name="q5_1m">
                                    </dd>
                                </dl>

                                <dl class="input-group u-clear">
                                    <dt class="input-group-label">
                                        <label class="input-label">
                                            <span class="input-label-text"><em>*</em>お問い合わせ項目</span>
                                        </label>
                                    </dt>
                                    <dd class="input-group-desc">
                                        <div class="input input-select">
                                            <select class="input-select-tag" name="q6_1">
                                                <option value="1">制作運営について</option>
                                                <option value="2">QuickBooksについて</option>
                                                <option value="3">PrimeEnglishについて</option>
                                                <option value="4">女子カレLOVABLEについて</option>
                                                <option value="5">採用について</option>
                                                <option value="6">その他</option>
                                            </select>
                                            <div class="input-select-icon">
                                                <i class="arrow-icon arrow-icon-bottom"></i>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>

								<dl class="input-group u-clear">
									<dt class="input-group-label">
										<label class="input-label">
											<span class="input-label-text"><em>*</em>詳細をご記入ください</span>
										</label>
									</dt>
									<dd class="input-group-desc">
										<textarea class="input input-textarea" name="q7_1" rows="10" cols="40"></textarea>
									</dd>
								</dl>

								<input type="hidden" name="public_id" value="4322">

								<div class="form-buttons">
									<div class="input-btn-list l-grid l-grid-col2 l-grid-lg-col1">
										<ul class="input-btn-list-inner l-grid-inner">
											<li class="input-btn-list-item l-grid-item">
												<div
													class="input-button input-button-bg-default input-button-width-small input-button-with-icon">
													<div class="input-button-box">
														<i class="arrow-icon arrow-icon-right"></i>
														<input class="input-button-tag" type="reset"
														       name="entry_box_reset" value="リセット">
													</div>
												</div>
											</li>
											<li class="input-btn-list-item l-grid-item">
												<div
													class="input-button input-button-bg-black input-button-width-small input-button-with-icon">
													<div class="input-button-box">
														<i class="arrow-icon arrow-icon-right"></i>
														<input class="input-button-tag" id="js-submit" type="submit"
														       name="entry_box_send" value="送信">
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
        </div>
	</main>
	<?php importTemplate( 'layout/_l-footer' ); ?>
</div>
<?php get_footer(); ?>
