<?php
/*
Plugin Name: Awesome Admin Cleaner
Plugin URI: http://freshmuse.com
Description: This plugin allows you to hide default wordpress admin items such as left nav menu items, default widgets, dashboard items, etc... It also has some options to customize the login screen and backend with your own logo and admin footer text.  It creates an option page under settings > Admin Cleaner Options.  Options must be saved upon initial install.  Plugin development by Dan Beil (Gaia Rendering), actions and code snippents from Grant Landram (Fresh Muse).
Author: Dan Beil and Grant Landram
Version: 1.0.6
Author URI: http://gaiarendering.com
License: GPL2
*/
?>
<?php
function gaia_sab_css() {
	wp_enqueue_script('sab_js', plugins_url('/js/sab_js.js', __FILE__), 'jquery', '', '');
	wp_register_style( 'gaia_sab_styles', plugins_url('/css/admincleaner.css', __FILE__), array(), '1' );
	wp_enqueue_style('gaia_sab_styles');
};
add_action('admin_enqueue_scripts', 'gaia_sab_css');
add_action('admin_menu', 'gaia_sab_submenu_page');
function gaia_sab_submenu_page() {
	add_submenu_page( 'options-general.php', 'Admin Cleaner Options', 'Admin Cleaner Options', 'manage_options', 'gaia-sab-submenu-page', 'gaia_sab_submenu_page_callback' ); 
}
//http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
function gaia_sab_init(){
	register_setting( 'gaia_sab_options', 'gaia_sab_options' );
}
add_action( 'admin_init', 'gaia_sab_init' );
function gaia_sab_submenu_page_callback() {
	include('inc/submenu-callback.php') ;
};
//end setting page
?>
<?php
add_action('plugins_loaded', 'gaia_fire');
function gaia_fire() {
	$gaia_sab_options = get_option('gaia_sab_options');
	$gaia_level = $gaia_sab_options['level'];
	if ($gaia_level == 'administrator') {
		include ('inc/is-admin.php') ;
	} elseif ($gaia_level == 'editor') {
		include ('inc/is-editor.php') ;
	} elseif ($gaia_level == 'author') {
		include ('inc/is-author.php') ;
	} elseif ($gaia_level == 'contributor') {
		include ('inc/is-contributor.php') ;
	};
};
	?>
<?php
function editor_level() {
		include ('inc/editor-level.php') ;
	};
add_action('admin_init', 'editor_level');
// start our functions
	function remove_dashboard_widgets() {
		require_once ('inc/remove-dashboard-widgets.php') ;
	};
// start our functions
	function remove_menu_pages() {
		require_once ('inc/remove-menu-pages.php') ;
	};
//start our function
	function remove_core_widgets() {
		require_once ('inc/remove-core-widgets.php') ;
	};
	function remove_meta_boxes() {
		require_once ('inc/remove-meta-boxes.php') ;
	};
	function theme_custom_login() {
		require_once ('inc/theme-custom-login.php') ;
	};
	add_action('login_head', 'theme_custom_login');
	function sab_url_login() {
		return home_url();
	};
	add_action('login_headerurl', 'sab_url_login');
	function admin_styles2() {
		require_once ('inc/login-logo.php') ;
	};
add_action('admin_head', 'admin_styles2'); //Thanks John Hawkins!
function modify_footer_admin() {
	require_once ('inc/admin-footer-mod.php') ;
};
$gaia_sab_options = get_option('gaia_sab_options');
if (!empty($gaia_sab_options['admin_footer'])) {
	add_action('admin_footer_text', 'modify_footer_admin');
};
?>