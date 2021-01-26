<?php
/*
 * Plugin Name: DD Simplest Maintenance Mode
 * Plugin URI: https://github.com/akshansh1998/dd-simplest-maintenance
 * Description: A Light Weight Simple WordPress Maintenance Plugin, as Plugin is Activated, It Displays a maintenance mode page for anyone who's not logged in.  
 * Version: 2.1
 * Author: Ankush Anand
 * Author URI: https://github.com/akshansh1998
 * License: GPLv2 or later
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * @package dd-simplest-maintenance-mode
 * @copyright Copyright (c) 2020, Ankush Anand


*/

/**
 * DD Simplest Maintenance Mode
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */

// Main Function of Plugin

function ddsmm_maintenance_mode()
{
	global $pagenow;
	if ($pagenow !== 'wp-login.php' && !current_user_can('manage_options') && !is_admin()) {
		header('HTTP/1.1 Service Unavailable', true, 503);
		header('Content-Type: text/html; charset=utf-8');
		if (file_exists(plugin_dir_path(__FILE__) . 'views/maintenance.php')) {
			require_once(plugin_dir_path(__FILE__) . 'views/maintenance.php');
		}
		die();
	}
}

// Adding Link
add_filter('plugin_row_meta', 'ddsmm_Donate', 10, 2);

function ddsmm_Donate($links, $file)
{
	if (plugin_basename(__FILE__) == $file) {
		$row_meta = array(
			'Support Author'    => '<a href="' . esc_url('https://ankushanand.com/donate/') . '" target="_blank" aria-label="' . esc_attr__('Plugin Additional Links', 'domain') . '" style="color:green;">' . esc_html__('Support Author', 'domain') . '</a>'
		);

		return array_merge($links, $row_meta);
	}
	return (array) $links;
}

// Admin Notice - Maintenance Mode is Active

function ddsmm_maintenance_notice()
{
?>
	<div class="notice notice-success">
		<p><?php 
		$site_url = get_site_url( );

		
		_e('Maintenance Mode is <b>Active</b>! You can Turn it off by <a href="'. $site_url.'/wp-admin/plugins.php">deactivating</a> the DD Simplest Maintenance Mode Plugin', ''); ?></p>
	</div>
<?php
}
add_action('admin_notices', 'ddsmm_maintenance_notice');
add_action('wp_loaded', 'ddsmm_maintenance_mode');
