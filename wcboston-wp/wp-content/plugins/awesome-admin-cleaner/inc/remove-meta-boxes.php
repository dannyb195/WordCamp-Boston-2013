<?php
$gaia_sab_options = get_option('gaia_sab_options');
	if ($gaia_sab_options['post_custom'] =='hide') {
		remove_meta_box('postcustom', 'post', 'normal');
	};
	if ($gaia_sab_options['trackbacks'] =='hide') {
		remove_meta_box('trackbacksdiv', 'post', 'normal');
	};
	if ($gaia_sab_options['comment_status'] =='hide') {
		remove_meta_box('commentstatusdiv', 'post', 'normal');
	};
	if ($gaia_sab_options['comments_div'] =='hide') {
		remove_meta_box('commentdiv', 'post', 'normal');
	};
	if ($gaia_sab_options['tags_div'] == 'hide') {
		remove_meta_box('tagsdiv-post_tag', 'post', 'normal');
	};
	?>