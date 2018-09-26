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
			<div class="l-section l-section-company" id="js-company-section">
				<div class="l-section-inner">
					<div class="l-container">
						<div class="outline-border outline-border-company"></div>
						<div class="l-section-head js-section-head">
							<?php importTemplate( 'module/_heading', array(
								'h'                => 1,
								'modifier'         => 'heading-centered',
								'text'             => 'ABOUT US',
								'sub'              => '会社概要',
								'underline_params' => array(
									'modifier' => 'wave-underline-short'
								)
							) ); ?>
						</div>

						<div class="l-section-body js-section-body">
							<table class="company-table">
								<tbody>

								<tr class="company-table-row">
									<th class="company-table-head">会社名</th>
									<td class="company-table-desc">株式会社ICE</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">所在地</th>
									<td class="company-table-desc">〒101-0051 東京都千代田区神田神保町1-105　神保町三井ビルディング</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">電話番号</th>
									<td class="company-table-desc">03-6837-4800（代）</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">設　立</th>
									<td class="company-table-desc">2006年 2月20日</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">資本金</th>
									<td class="company-table-desc">1億円</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">事業年度</th>
									<td class="company-table-desc">毎年4月1日から3月31日まで</td>
								</tr>

                                <tr class="company-table-row">
                                    <th class="company-table-head">従業員数</th>
                                    <td class="company-table-desc">62名（2017年10月1日現在）</td>
                                </tr>

								<tr class="company-table-row">
									<th class="company-table-head">役員</th>
									<td class="company-table-desc">
										<div class="employee-list">
											<div class="employee-list-inner">
												<dl class="employee">
													<dt class="employee-position">代表取締役社長</dt>
													<dd class="employee-name">北川 雅洋</dd>
												</dl>
												<dl class="employee">
													<dt class="employee-position">取締役</dt>
													<dd class="employee-name">渡邊 一弘</dd>
												</dl>
												<dl class="employee">
													<dt class="employee-position">取締役</dt>
													<dd class="employee-name">山手 章弘</dd>
												</dl>
												<dl class="employee">
													<dt class="employee-position">監査役</dt>
													<dd class="employee-name">佐々木 敬</dd>
												</dl>
											</div>
										</div>
									</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">事業内容</th>
									<td class="company-table-desc">詳細は<a
											href="<?php echo resolve_archive_uri( SERVICE_POST_TYPE ); ?>">こちら</a></td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">決算公告</th>
									<td class="company-table-desc">決算公告は<a
											href="<?php echo ACCOUNT_SETTLEMENT_NOTICE_LINK; ?>" target="_blank">こちら</a>
									</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">電子公告</th>
									<td class="company-table-desc">電子公告は<a
											href="<?php echo ELECTRONIC_PUBLIC_NOTICE_LINK; ?>" target="_blank">こちら</a>
									</td>
								</tr>

								<tr class="company-table-row">
									<th class="company-table-head">主要取引先</th>
									<td class="company-table-desc">
										<div class="client-list">
											<ul class="client-list-inner">
												<li class="client-list-item">株式会社NTTドコモ</li>
												<li class="client-list-item">株式会社PHP研究所</li>
							                    <li class="client-list-item">株式会社世界文化社</li>
							                    <li class="client-list-item">株式会社集英社</li>
							                    <li class="client-list-item">株式会社小学館</li>
							                    <li class="client-list-item">株式会社東京創元社</li>
							                    <li class="client-list-item">図書印刷株式会社</li>
							                    <li class="client-list-item">株式会社ブックリスタ</li>
							                    <li class="client-list-item">株式会社ワニブックス</li>
												<li class="client-list-item">（50音順）</li>
											</ul>
										</div>
									</td>
								</tr>

								</tbody>
							</table>
						</div>

						<div class="l-section-footer js-section-footer">

						</div>
					</div>
				</div>
			</div>

			<section class="l-section l-section-access" id="js-access-section">
				<div class="l-section-inner">
					<div class="l-container">
						<div class="l-section-head js-section-head">
							<?php importTemplate( 'module/_heading', array(
								'h'                => 2,
								'modifier'         => 'heading-centered',
								'text'             => 'ACCESS',
								'sub'              => 'アクセス',
								'underline_params' => array(
									'modifier' => 'wave-underline-short'
								)
							) ); ?>
						</div>
					</div>

					<div class="l-section-body js-section-body">
						<div class="company-map">
							<div class="company-map-inner">
								<div class="company-map-location" id="js-company-map" data-lat="35.694249"
								     data-lng="139.7602922"></div>

								<div class="company-map-button">
									<?php importTemplate( 'module/_button', array(
										'tag'        => 'a',
										'href'       => ACCESS_GMAP,
										'target'     => '_blank',
										'modifier'   => 'button-bg-default button-width-small button-gmap button-text-centered',
										'variation'  => 'with-icon',
										'text'       => 'Google map',
										'iconParams' => array(
											'modifier' => 'button-icon-right',
											'icon'     => 'icon-external-link-white'
										)
									) ); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="l-container">
						<div class="l-section-footer js-section-footer">
							<div class="access-detail">
								<div class="access-detail-desc">
									<dl>
										<dt> 株式会社ICE</dt>
										<dd>
											〒101-0051　東京都千代田区神田神保町1-105　神保町三井ビルディング<br class="u-sp-hidden">
											TEL:03-6837-4800<br>
										</dd>
									</dl>
								</div>

								<div class="access-detail-list">
									<ul>
										<li> 三田線・新宿線・半蔵門線「神保町駅」A9出口　徒歩2分</li>
										<li> 東西線「竹橋駅」3b出口　徒歩5分</li>
										<li> 千代田線「新御茶ノ水駅」B7出口　徒歩5分</li>
										<li> 丸の内線「淡路町駅」A6出口　徒歩5分</li>
										<li> 新宿線「小川駅」B7出口　徒歩5分</li>
										<li> JR線「御茶ノ水駅」新御茶ノ水橋口　徒歩8分</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php importTemplate( 'module/_contact' ); ?>
		</div>
	</main>
	<?php importTemplate( 'layout/_l-footer' ); ?>
</div>
<?php get_footer(); ?>
