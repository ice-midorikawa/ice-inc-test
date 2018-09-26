<?php
/**
 *    定数:定数はここに全部書いてください
 *  定数名は単語毎「_」区切りで全て大文字にすること
 *  使用方法のコメントを必ず残すこと
 *
 * @author  zuya@LIG.inc
 * @create  2013/09/12
 * @version    1.0
 */

/** TOPページの投稿取得件数 */
//define("TOP_POST_LIMIT", "999");

define( 'APP_TITLE', 'icecorp' );

// home url
define( 'HOME_URL', home_url() . '/' );

// テーマディレクトリまでのパス
define( 'ITEM_URL', get_stylesheet_directory_uri() . '/' );

//assets path
define( 'CSS_URI', ITEM_URL . "assets/css/" );
define( 'IMAGE_URI', ITEM_URL . "assets/images/" );
define( 'JS_URI', ITEM_URL . "assets/js/" );
define( 'LIB_URI', ITEM_URL . "assets/lib/" );

//posttype and taxonomies
define( 'WORKS_POST_TYPE', 'works' );
define( 'WORKS_POST_LABEL', 'Works' );
define( 'WORKS_TAX_CAT', 'works_category' );
define( 'WORKS_PERMALINK_REWRITE', 'solution' );

define( 'WORKS_CAT_SLUG_PC', 'pc' );
define( 'WORKS_CAT_SLUG_IOS', 'ios' );
define( 'WORKS_CAT_SLUG_ANDROID', 'android' );
define( 'WORKS_CAT_SLUG_KEITAI', 'keitai' );

define( 'SERVICE_POST_TYPE', 'service' );
define( 'SERVICE_POST_LABEL', 'Service' );
define( 'SERVICE_PERMALINK_REWRITE', 'content' );

define( 'NEWS_POST_TYPE', 'news' );
define( 'NEWS_POST_LABEL', 'News' );

//works list options acf group
define( 'WORKS_LIST_FOR_INDEX_PAGE_OPTIONS', 'works_list_for_index_page' );

//service list options acf group
define( 'SERVICE_LIST_FOR_INDEX_PAGE_OPTIONS', 'service_list_for_index_page' );

//works post acf group
define( 'WORKS_CUSTOM_FIELD_THUMBNAIL', 'thumbnail' );

define( 'WORKS_POST_WORK_DETAIL', 'work_detail' );
define( 'WORKS_POST_WORK_DETAIL_LABEL', 'label' );
define( 'WORKS_POST_WORK_DETAIL_DETAIL', 'detail' );

define( 'WORKS_POST_APP_STORE_LINK', 'app_store_link' );
define( 'WORKS_POST_GOOGLE_PLAY_LINK', 'google_play_link' );
define( 'WORKS_POST_WEBSITE_LINK', 'website_link' );
define( 'WORKS_POST_WORK_SCREENSHOT_DESKTOP_SITE', 'work_screenshot_desktop_site' );
define( 'WORKS_POST_WORK_SCREENSHOT_MOBILE_SITE', 'work_screenshot_mobile_site' );

define( 'WORKS_POST_ARTICLES', 'articles' );
define( 'WORKS_POST_ARTICLES_TITLE', 'title' );
define( 'WORKS_POST_ARTICLES_BODY', 'body' );

//service post acf group
define( 'SERVICE_POST_APP_STORE_LINK', 'app_store_link' );
define( 'SERVICE_POST_GOOGLE_PLAY_LINK', 'google_play_link' );
define( 'SERVICE_POST_WEBSITE_LINK', 'website_link' );
define( 'SERVICE_POST_SERVICE_SCREENSHOT_DESKTOP_SITE', 'service_screenshot_desktop_site' );
define( 'SERVICE_POST_SERVICE_SCREENSHOT_MOBILE_SITE', 'service_screenshot_mobile_site' );

define( 'SERVICE_POST_ARTICLES', 'articles' );
define( 'SERVICE_POST_ARTICLES_TITLE', 'title' );
define( 'SERVICE_POST_ARTICLES_BODY', 'body' );

// ノーイメージパス
define( 'NOIMAGE', ITEM_URL . 'assets/images/common/noimage.png' );

//nav texts and links
define( 'TOP_TEXT_EN', 'TOP' );
define( 'TOP_TEXT_JP', 'トップ' );

define( 'SERVICE_TEXT_EN', 'CONTENT' );
define( 'SERVICE_TEXT_JP', '自社ブランド事業' );

define( 'WORKS_TEXT_EN', 'SOLUTION' );
define( 'WORKS_TEXT_JP', 'パートナーブランド事業' );

define( 'NEWS_TEXT_EN', 'NEWS' );
define( 'NEWS_TEXT_JP', 'ニュース' );

define( 'COMPANY_TEXT_EN', 'ABOUT US' );
define( 'COMPANY_TEXT_JP', '会社概要' );
define( 'COMPANY_URL', home_url( '/about/' ) );

define( 'CONTACT_TEXT_EN', 'CONTACT' );
define( 'CONTACT_TEXT_JP', 'お問い合わせ' );
define( 'CONTACT_URL', home_url( '/contact/' ) );

define( 'IMPRESS_URL', 'http://www.impressholdings.com' );

define( 'ABOUT_IMPRESS_TEXT_JP', 'インプレスグループについて' );
define( 'ABOUT_IMPRESS_URL', 'http://www.impressholdings.com/info/index.htm' );

define( 'PRIVACY_TEXT_JP', 'プライバシーポリシー' );
define( 'PRIVACY_URL', 'http://www.impressholdings.com/privacy/index.htm' );

//pages
define( 'COMPANY_PAGE', 'about' );
define( 'CONTACT_PAGE', 'contact' );
define( 'CONTACT_THANKS_PAGE', 'send' );

//index page banners acf
define( 'BANNER_IMAGE_1', 'banner_image_1' );
define( 'BANNER_LINK_1', 'banner_link_1' );
define( 'BANNER_IMAGE_2', 'banner_image_2' );
define( 'BANNER_LINK_2', 'banner_link_2' );

//image size
define( 'SINGLE_EYECATCH', 'single-eyecatch' );
define( 'CARD_EYECATCH', 'card-eyecatch' );
define( 'CARD_THUMBNAIL', 'card-thumbnail' );
define( 'INDEX_BANNER', 'index_banner' );

//external
define( 'ACCESS_GMAP', 'https://www.google.com.ph/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEICE/@35.6942248,139.7581088,17z/data=!4m8!1m2!2m1!1z5qCq5byP5Lya56S-SUNFIOOAkjEwMS0wMDUx44CA5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw56We5L-d55S6MS0xMDXjgIDnpZ7kv53nlLrkuInkupXjg5Pjg6vjg4fjgqPjg7PjgrA!3m4!1s0x60188c104b9d8e15:0xc6e524efd287628f!8m2!3d35.6942168!4d139.7602586?hl=jp' );
define( 'ACCOUNT_SETTLEMENT_NOTICE_LINK', 'http://www.impressholdings.com/info/profiles/ice_bain.htm' );
define( 'ELECTRONIC_PUBLIC_NOTICE_LINK', 'http://www.impressholdings.com/info/profiles/ice_announce.htm' );
