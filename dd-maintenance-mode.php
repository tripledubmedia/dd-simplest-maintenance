<?php
/*
 * Plugin Name: DD Simplest Maintenance Mode
 * Plugin URI: https://github.com/akshansh1998/dd-simplest-maintenance
 * Description: Displays a maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Ankush anand
 * Author URI: https://ankushanand.com
 * License: GNU GPL3
 *
 * @package dd-maintenance-mode
 * @copyright Copyright (c) 2020, Ankush Anand
 * @license GNU GPL3
*/

/**
 * Simplest Maintenance Page
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */
function dd_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( 'HTTP/1.1 Service Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'dd_maintenance_mode' );