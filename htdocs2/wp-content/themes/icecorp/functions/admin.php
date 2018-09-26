<?php

/**
 * 不要なメニューを削除する場合に利用します。
 *
 * @author Kobayashi
 */
function lig_wp_remove_menus() {
	remove_menu_page( 'index.php' ); // dashboard
	remove_menu_page( 'edit.php' ); //post
	remove_menu_page( 'upload.php' ); //media
	//remove_menu_page( 'link-manager.php' );
	remove_menu_page( 'edit-comments.php' ); //comments
	remove_menu_page( 'tools.php' ); //tools
	//remove_submenu_page( 'index.php', 'update-core.php' ); // 本体更新ページ
	//remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
}

if ( !is_super_admin() ) { // ※管理者以外のログイン時にフックする場合。
	add_action( 'admin_menu', 'lig_wp_remove_menus' );
}

//works list options
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => __( 'Works List Options' ),
		'menu_title' => __( 'Works List Options' ),
		'menu_slug'  => 'acf-works-list-options',
	) );
}

//service list options
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => __( 'Service List Options' ),
		'menu_title' => __( 'Service List Options' ),
		'menu_slug'  => 'acf-service-list-options',
	) );
}

//index page options
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => __( 'Index Page Options' ),
		'menu_title' => __( 'Index Page Options' ),
		'menu_slug'  => 'acf-index-page-options',
	) );
}

//hide post title for news post type and force excerpt view
function hide_post_title() {
	if ( get_current_screen()->post_type === NEWS_POST_TYPE ) {
		//hide title
		echo '<style type="text/css">';
		echo '.row-title{';
		echo '  display: none;';
		echo '}';
		echo '</style>';

		//force excerpt view
		$_REQUEST['mode'] = 'excerpt';
	}
}

add_action( "load-edit.php", "hide_post_title" );