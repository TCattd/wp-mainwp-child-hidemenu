<?php
/*
Plugin Name: MainWP Child: hide menu
Plugin URI: https://github.com/TCattd/wp-mainwp-child-hidemenu
Description: Hides MainWP's child menu item from clients
Version: 1.0.1
Author: Esteban Cuevas
Author URI: http://www.attitude.cl
License: GPLv2
License URI: http://opensource.org/licenses/GPL-2.0
*/

function tcattd_mainwp_child_hidemenu() {
	global $current_user;

	$forceit = false;

	get_currentuserinfo();

	if(strtolower($current_user->user_login) != 'killtro' AND strtolower($current_user->user_login) != 'esteban' AND strtolower($current_user->user_login) != 'admin' OR $forceit === true)
	{

		remove_menu_page('mainwp_child_tab');

	}
}

add_action('admin_menu', 'tcattd_mainwp_child_hidemenu', 999);
