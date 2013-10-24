<?php
$gaia_sab_options = get_option('gaia_sab_options');
	if ($gaia_sab_options['tools'] =='hide') {
		remove_menu_page('tools.php');
	};
	if ($gaia_sab_options['index'] =='hide') {
		remove_menu_page('index.php');
	};
	if ($gaia_sab_options['users'] =='hide') {
		remove_menu_page('users.php');
	};
	if ($gaia_sab_options['plugins'] =='hide') {
		remove_menu_page('plugins.php');
	};
	if ($gaia_sab_options['comments_menu'] =='hide') {
		remove_menu_page('edit-comments.php');
	};
	if ($gaia_sab_options['link_man'] =='hide') {
		remove_menu_page('link-manager.php');
	};
	if ($gaia_sab_options['themes'] =='hide') {
		remove_submenu_page('themes.php', 'themes.php');
	};
	if ($gaia_sab_options['nav_menu'] =='hide') {
		remove_submenu_page('themes.php', 'nav-menus.php');
	};
	?>