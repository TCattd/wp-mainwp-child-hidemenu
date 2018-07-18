<?php
/*
Plugin Name: MainWP Child: hide menu
Plugin URI: https://github.com/TCattd/wp-mainwp-child-hidemenu
Description: Hides MainWP's Child menu item from clients
Version: 1.0.2
Author: Esteban Cuevas
Author URI: http://actitud.xyz
License: GPLv2
License URI: http://opensource.org/licenses/GPL-2.0
 */

function tcattd_mainwp_child_hidemenu() {
	$forceit      = false;
	$current_user = wp_get_current_user();

	$allowed_users = array(
		'killtro',
		'esteban',
	);

	if ( ! in_array( strtolower( $current_user->user_login ), $allowed_users ) || $forceit === true ) {
		remove_menu_page( 'mainwp_child_tab' );
		remove_submenu_page( 'options-general.php', 'mainwp_child_tab' ); //3.1.x
		remove_submenu_page( 'admin.php', 'mainwp_child_tab' ); //3.1.x
	}
}
add_action('admin_menu', 'tcattd_mainwp_child_hidemenu', 999);
