<?php
/*
Plugin Name: login-registration-plugin
Plugin URI: https://for-products.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 4.0.2
Author: Janak Oza
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later

*/

define( 'LRP_PLUGIN', __FILE__ );
define( 'LRP_PLUGIN_BASENAME', plugin_basename( LRP_PLUGIN ) );
define( 'LRP_PLUGIN_NAME', trim( dirname( LRP_PLUGIN_BASENAME ), '/' ) );
define( 'LRP_PLUGIN_DIR', untrailingslashit( dirname( LRP_PLUGIN ) ) );
add_action('admin_menu', 'my_admin_login');
function my_admin_login(){

	add_menu_page('Login title','login Settings','manage_options','Login_Setting_page','login_admin_page');
	
}

function login_admin_page(){

	?>
	<div class="LR-shortcode">
		<p class="shcd">
			<?php
			echo "For Login Shortcode:[get-login]";



			echo "For Registration Shortcode:[get-registration]";
			?>
		</p>
	</div>
	<?php
}
include_once LRP_PLUGIN_DIR.'/includes/index.php';
include_once LRP_PLUGIN_DIR.'/includes/functions.php';
include_once LRP_PLUGIN_DIR.'/settings.php';

?>