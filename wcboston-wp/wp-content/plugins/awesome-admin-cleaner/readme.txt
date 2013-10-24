=== Awesome Admin Cleaner ===
Contributors: dan-gaia, grantlandram
Donate link: http://www.gaiarendering.com/buy-me-a-beer
Tags: Admin Menu, Customize Login Logo, Hide Admin Menu Items, Brand Admin, Branding, Remove Widgets
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 1.0.6
 
Admin Cleaner allows you to hide admin menu items and restyle the login screen and admin menu colors

== Description ==

Generally speaking this plugin is intended for developers who make sites for clients though most intermediate users will be able to set it up as well

Admin Cleaner allows you to hide / remove admin menu items such as Comments, Links, Dashboard, etc...from users that have no need to see these items.  You can also remove any of the default widgets that may just be taking up space.

This plugin also allows you to change the login logo, background color / image, admin menu background color, and admin menu text color.  This may be useful to brand the backend to your (or your client's) business.

Often when WordPress is used as a CMS there are many items that never get used, which is why this plugin came to life.

== Installation ==

From Repo:

1. Search for 'Admin Cleaner'
1. Click on 'Install'
1. Cllick on 'Active'
1. The plugin's options page is located under the 'Setting' menu
1. All options are optional the you must save the options after initial install

Manual Install

1. Un-Zip and upload the 'AdminCleaner' directory to 'wp-content/plugins'
1. Activate Admin Cleaner
1. The plugin's options page is located under the 'Setting' menu
1. All options are optional the you must save the options after initial install

== Frequently Asked Questions ==

= Can I use Admin Cleaner to style the login screen only? =

Yep. to do this simply make sure all options are set to 'Show' and fill out the Custom CSS Options

== Changelog ==

= 1.0.1 =
* Initial Release

= 1.0.2 =
* Changed name to Admin Cleaner and updated links
* Changed line 98 function sab_url_login() {
		return '/';
	};
	to
	function sab_url_login() {
		return home_url();
	};
* Added login logo height and width

= 1.0.2 =
* file include location fix

= 1.0.3 =
* added support for login logos wider than 320px

= 1.0.4 =
* better handles admin logo centering

= 1.0.5 =
*Fixed .wrap class css issue

= 1.0.6 =
*fixed header already sent