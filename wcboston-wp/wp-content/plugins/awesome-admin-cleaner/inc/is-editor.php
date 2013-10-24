<?php
if(current_user_can('author') || current_user_can('contributor') || current_user_can('subscriber')) {
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets', 99);
	add_action('admin_menu', 'remove_menu_pages', 99);
	add_action('widgets_init', 'remove_core_widgets', 99);
	add_action('admin_init', 'remove_meta_boxes', 99);
	print_r($gaia_user);
}
?>