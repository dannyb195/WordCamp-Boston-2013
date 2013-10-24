<?php
$gaia_sab_options = get_option('gaia_sab_options');
if (!empty($gaia_sab_options['admin_footer'])) {
echo $gaia_sab_options['admin_footer'];	
}
?>