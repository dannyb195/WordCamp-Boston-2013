<?php
$gaia_sab_options = get_option('gaia_sab_options');
if ($gaia_sab_options['editor'] == 'yes') {
		// get the the role object
	$role_object = get_role( 'editor' );
		// add $cap capability to this role object
	$role_object->add_cap( 'edit_theme_options' );
} else {
	$role_object = get_role( 'editor' );
		// add $cap capability to this role object
	$role_object->remove_cap( 'edit_theme_options' );
};
?>