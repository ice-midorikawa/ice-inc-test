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
            <section class="l-section l-section-contact-thanks" id="js-contact-thanks-section">
                <div class="l-section-inner">
                    <div class="l-container">
                        <div class="outline-border"></div>
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
                        </div>

                        <div class="l-section-body js-section-body">
                            <p class="default-text default-text-strong">
                                送信が完了しました。<br class="u-sp-hidden">
                                お問い合わせいただきありがとうございます。
                            </p>
                            <p class="default-text">
                                後ほど、担当者よりご連絡させていただきますので、<br class="u-sp-hidden">
                                今しばらくお待ちいただきますようお願い申し上げます。
                            </p>
                        </div>

                        <div class="l-section-footer js-section-footer">
                            <?php importTemplate( 'module/_button', array(
                                'tag'         => 'a',
                                'href'        => HOME_URL,
                                'modifier'    => 'button-bg-default button-width-default',
                                'variation'   => 'with-icon',
                                'text'        => 'トップページへ',
                                'icon_params' => array(
                                    'modifier' => 'button-icon-right',
                                    'icon'     => 'arrow-icon-right'
                                )
                            ) ); ?>
                        </div>

                    </div>
                </div>
            </section>
            </div>
	</main>
	<?php importTemplate( 'layout/_l-footer' ); ?>
</div>
<?php get_footer(); ?>
