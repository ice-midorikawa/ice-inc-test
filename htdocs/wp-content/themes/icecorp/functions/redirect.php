<?php
/**
 *    redirect functions
 *
 */

function url_redirect() {
	$url_protocol = ( isset( $_SERVER['HTTPS'] ) ? 'https' : 'http' ) . '://';
	$host         = $_SERVER['HTTP_HOST'];
	$request_uri  = $_SERVER['REQUEST_URI'];
	$status       = 301;

	if ( preg_match( '/\/services/', $request_uri ) === 1 ) {
		$request_uri = preg_replace( '/\/services/', '/content', $request_uri );
		wp_redirect( $url_protocol . $host . $request_uri, $status );
		exit();
	}

	//portfolio -> solution
	if ( preg_match( '/\/portfolio/', $request_uri ) === 1 ) {
		$request_uri = preg_replace( '/\/portfolio/', '/solution', $request_uri );
		wp_redirect( $url_protocol . $host . $request_uri, $status );
		exit();
	}

	//company -> about
	if ( preg_match( '/\/company/', $request_uri ) === 1 ) {
		$request_uri = preg_replace( '/\/company/', '/about', $request_uri );
		wp_redirect( $url_protocol . $host . $request_uri, $status );
		exit();
	}

	//contacts -> contact
	if ( preg_match( '/\/contacts/', $request_uri ) === 1 ) {
		$request_uri = preg_replace( '/\/contacts/', '/contact', $request_uri );
		wp_redirect( $url_protocol . $host . $request_uri, $status );
		exit();
	}
}

add_action( 'template_redirect', 'url_redirect' );