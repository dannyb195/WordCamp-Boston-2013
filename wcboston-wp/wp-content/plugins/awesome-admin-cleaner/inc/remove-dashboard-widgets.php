<?php
global $wp_meta_boxes;
	$gaia_sab_options = get_option('gaia_sab_options');
	if ($gaia_sab_options['quick'] =='hide') {
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	};
	if ($gaia_sab_options['links'] =='hide') {
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	};
	if ($gaia_sab_options['now'] =='hide') {
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	};
	if ($gaia_sab_options['plug'] =='hide') {
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	};
	if ($gaia_sab_options['drafts'] =='hide') {
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	};
	if ($gaia_sab_options['comments'] =='hide') {
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	};
	if ($gaia_sab_options['blog'] =='hide') {
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	};
	if ($gaia_sab_options['secondary'] =='hide') {
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	};
	?>