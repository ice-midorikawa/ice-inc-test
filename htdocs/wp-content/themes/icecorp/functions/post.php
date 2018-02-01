<?php
/**
 *	投稿タイプ：投稿で使用する処理を記載します。
 *
 *
 *   @author  danda hayato
 *   @create  2013/09/12
 *   @version    1.0
 */

/**
 * アイキャッチを取得、なければノーイメージを返す
 * @return string
 */
function get_eyecatch_data($post_id, $thumbnail = "full", $noimage = false) {
	if ( has_post_thumbnail( $post_id ) ) {
		$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $thumbnail, true );
		return $image_data[0];
	} elseif(empty($noimage)) {
		return false;
	} else {
		return $noimage;
	}
}

/**
 * カスタムフィールドの画像を取得、なければノーイメージを返す
 * @return string
 */
function get_thumbnail_data($image_id, $thumbnail = "full", $noimage = false) {
	if ( ! empty( $image_id ) ) {
		$image_data = wp_get_attachment_image_src( $image_id, $thumbnail, true );
		return $image_data[0];
	} elseif(empty($noimage)) {
		return false;
	}else {
		return $noimage;
	}
}

//管理画面の「見出し１」等を削除する
function custom_editor_settings( $initArray ) {
	$initArray['block_formats'] = "段落=p; 見出し2=h2; 見出し3=h3;";

	return $initArray;
}

add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

//post.php editor buttons
function editor_buttons( $qtInit ) {
	if(get_post_type() === NEWS_POST_TYPE){
		$qtInit['buttons'] = 'link';
	}

	return $qtInit;
}
add_filter('quicktags_settings', 'editor_buttons');