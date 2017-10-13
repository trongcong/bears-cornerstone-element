<?php

/*
Plugin Name: Bears Cornerstone Element
Plugin URI:   https://bearsthemes.com/
Description: Bears Cornerstone Element Support
Version: 1.0
Author:       Trong Cong
Author URI: http://2dev4u.com
Text Domain:  bce
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Domain Path:  /languages
*/

ob_start();
$bce_dir = plugin_dir_path( __FILE__ );
$bce_url =plugin_dir_url(__FILE__);

require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( ! function_exists( 'bce_check_cornerstone_is_active' ) ) {
	function bce_check_cornerstone_is_active() {
		return ( ! is_plugin_active( 'cornerstone/cornerstone.php' ) );
	}
}

if ( ! function_exists( 'bce_admin_notice_page_builder_conflict' ) ) {
	function bce_admin_notice_page_builder_conflict() {
		$cornerstone     = class_exists( 'Cornerstone_Plugin' );
		$visual_composer = class_exists( 'Vc_Manager' );

		if ( $cornerstone && $visual_composer ) :
			?>
            <div class="notice notice-warning is-dismissible bce-plugin">
                <img style="width: 80px; margin-top: 10px;"
                     src="<?php echo plugin_dir_url( __FILE__ ) . 'admin\images\bce-message-icon.png'; ?>"
                     alt="notice" />
	            <p><strong><?php _e( 'Page Builder Conflict !!!', 'bce' ) ?></strong></p>
                <p><?php _e( 'We found that you used two page buider plugins at the same time (Cornerstone & Visual Composer). We\'d recommend you use only one of them. Your site will be fine if you use only one of those plugins.', 'bce' ); ?></p>
			</div>
			<?php
		endif;

		if ( ! $cornerstone ):
			?>
            <div class="notice notice-warning is-dismissible bce-plugin">
                <img style="width: 80px; margin-top: 10px;"
                     src="<?php echo plugin_dir_url( __FILE__ ) . 'admin\images\bce-message-icon.png'; ?>"
                     alt="notice" />
                <p><strong><?php _e( 'ERROR !!!', 'bce' ); ?></strong></p>
                <p><?php _e( 'Please installing and active CornerStone Plugin before use Bears Cornerstone Element.', 'bce' ); ?></p>
            </div>
			<?php
		endif;
	}
}
add_action( 'admin_notices', 'bce_admin_notice_page_builder_conflict' );


if ( ! bce_check_cornerstone_is_active() ) {
	require_once 'includes/init.php';
}

file_put_contents( __DIR__ . '/log.html', ob_get_contents() );