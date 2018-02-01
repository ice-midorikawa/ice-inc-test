<?php
/**
 * アイキャッチに対応させる場合に利用します。
 *
 * @author Kobayashi
 */
add_theme_support( 'post-thumbnails' );
add_image_size( SINGLE_EYECATCH, ( 420 * 2 ), ( 348 * 2 ), true );    // アイキャッチサイズ指定
add_image_size( CARD_EYECATCH, ( 349.33 * 2 ), ( 290 * 2 ), true );    // アイキャッチサイズ指定
add_image_size( CARD_THUMBNAIL, ( 54 * 2 ), ( 54 * 2 ), true );    // アイキャッチサイズ指定
add_image_size( INDEX_BANNER, ( 450 * 2 ), ( 160 * 2 ), true );