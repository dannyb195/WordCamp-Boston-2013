<?php
$gaia_sab_options = get_option('gaia_sab_options');
	if ($gaia_sab_options['calendar'] =='hide') {
		unregister_widget('WP_Widget_Calendar');
	};
	if ($gaia_sab_options['pages'] =='hide') {
		unregister_widget('WP_Widget_Pages');
	};
	if ($gaia_sab_options['archives'] =='hide') {
		unregister_widget('WP_Widget_Archives');
	};
	if ($gaia_sab_options['links_wid'] =='hide') {
		unregister_widget('WP_Widget_Links');
	};
	if ($gaia_sab_options['meta'] =='hide') {
		unregister_widget('WP_Widget_Meta');
	};
	if ($gaia_sab_options['search'] =='hide') {
		unregister_widget('WP_Widget_Search');
	};
	if ($gaia_sab_options['categories'] =='hide') {
		unregister_widget('WP_Widget_Categories');
	};
	if ($gaia_sab_options['recent_posts'] =='hide') {
		unregister_widget('WP_Widget_Recent_Posts');
	};
	if ($gaia_sab_options['recent_comments'] =='hide') {
		unregister_widget('WP_Widget_Recent_Comments');
	};
	if ($gaia_sab_options['rss'] =='hide') {
		unregister_widget('WP_Widget_RSS');
	};
	if ($gaia_sab_options['tag_cloud'] =='hide') {
		unregister_widget('WP_Widget_Tag_Cloud');
	};
	if ($gaia_sab_options['custom_menu'] =='hide') {
		unregister_widget('WP_Nav_Menu_Widget');
	};
	?>