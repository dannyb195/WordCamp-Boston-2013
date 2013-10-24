<?php
$gaia_sab_options = get_option('gaia_sab_options');
$gaia_sab_logo = $gaia_sab_options["admin_logo"];
echo '<style type="text/css">';
if (!empty($gaia_sab_logo)) {
	echo '#wp-admin-bar-wp-logo .ab-icon {
		background-image:url("'.$gaia_sab_options["admin_logo"].'") !important;
		background-position: top left !important;
	}';
};
if (!empty($gaia_sab_options["admin_menu_back"])) {
	echo '#adminmenuback, #adminmenuwrap {
		background-color:'.$gaia_sab_options["admin_menu_back"].' !important;
	}';
};
if (!empty($gaia_sab_options["admin_menu_link"])) {
	echo '#adminmenu a.menu-top:link, #adminmenu a.menu-top:visited {
		color:'.$gaia_sab_options["admin_menu_link"].';
	}';
};
if (!empty($gaia_sab_options["admin_menu_hover"])) {
	echo '#adminmenu a.menu-top:hover{
		color:'.$gaia_sab_options["admin_menu_hover"].';
	}';
};
if (!empty($gaia_sab_options["admin_menu_border_top"])) {
	echo '#adminmenu a.menu-top{
		border-top-color:'.$gaia_sab_options["admin_menu_border_top"].';
	}';
};
if (!empty($gaia_sab_options["admin_menu_border_bottom"])) {
	echo '#adminmenu a.menu-top{
		border-bottom-color:'.$gaia_sab_options["admin_menu_border_bottom"].';
	}';
};
	echo '</style>';
?>