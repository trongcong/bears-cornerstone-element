<?php
/**
 * Created by PhpStorm.
 * User: NTC
 * Date: 9/30/2017
 * Time: 10:14
 */

require 'cornerstone_integration_bce.php';

$cornerstone_integration_bce = new Cornerstone_Integration_BCE();
$cornerstone_integration_bce->_init();

if ( ! function_exists( 'bce_scss_handle' ) ) {

	function bce_scss_handle( $scss_content_string = '' ) { 
		
		$scss_formatter = class_exists( 'scss_formatter' );
		if (! $scss_formatter ) { 
			require_once 'scss.inc.php';
		}

		global $wp_filesystem;
		if ( empty( $wp_filesystem ) ) {
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			WP_Filesystem();
		}

		$scss              = new scssc();
		$scss_main_content = $wp_filesystem->get_contents( $GLOBALS['bce_dir'] . 'public/css/_elements.scss' );
		$style_path        = $GLOBALS['bce_dir'] . 'public/css/bce.css';
		$scss->setImportPaths( $GLOBALS['bce_dir'] . 'public/css/' );

		$scss->setFormatter( 'scss_formatter_compressed' );
		$scss_content = $scss->compile( $scss_content_string . $scss_main_content );
		$wp_filesystem->put_contents( $style_path, $scss_content, FS_CHMOD_FILE );
	}
}


if ( WP_DEBUG ) {
	bce_scss_handle();
}

if ( ! function_exists( 'bce_install' ) ) {
	function bce_install() {
		bce_scss_handle();
		bce_admin_notice_page_builder_conflict();
	}

	register_activation_hook( __FILE__, 'bce_install' );
}

if ( ! function_exists( 'bce_deactivation' ) ) {
	function bce_deactivation() {

	}

	register_deactivation_hook( __FILE__, 'bce_deactivation' );
}