<?php
/*
Plugin Name: (EH) From Mail
Plugin URI: http://erichamby.com
Description: Lets you change the default wordpress email from name and address. Visit "<a href="http://erichamby.com">EricHamby.Com</a>" to get information on this plugin and many others.
Version: 1.0
Build: 10.03.10
Author: Eric Hamby
Author URI: http://erichamby.com/
*/

/* Sets the locations for the plugin */
$ehfromemailloc = basename(dirname(__FILE__));
$ehfromemaildir = get_settings('home').'/wp-content/plugins/'.$ehfromemailloc;
$ehfromemailfile = $ehfromemaildir.'/eh-from-mail.php';
$ehfromemaillogo = $ehfromemaildir.'/admin/images/admin_logo.png';

/* Gets all the files needed for the plugin to work */
require_once('admin/admin_functions.php');
require_once('admin/info_page.php');
require_once('admin/update_page.php');
require_once('admin/options_page.php');
require_once('admin/register_page.php');

/* Places settings links */
function set_plugin_meta04($links) {
 
	$plugin = eh_from_mail;
 
	$settings_link = sprintf( '<a href="admin.php?page=%s">%s</a>', $plugin, __('Settings') );
	array_unshift( $links, $settings_link );
 
	return $links;
}
 
add_filter( 'plugin_action_links_' . $plugin, 'set_plugin_meta04' );

/* Places alt links */
function set_plugin_meta05($links, $file) {
$plugin = plugin_basename(__FILE__);
 // create link
	if ($file == $plugin) {
	return array_merge( $links,
	array( sprintf( '<a href="http://indexjunkie.com">Index Junkie</a>') ));
	} return $links; }
add_filter( 'plugin_row_meta', 'set_plugin_meta05', 10, 2 );

function set_plugin_meta06($links, $file) {
$plugin = plugin_basename(__FILE__);
 // create link
	if ($file == $plugin) {
	return array_merge( $links,
	array( sprintf( '<a href="https://www.e-junkie.com/ecom/gb.php?cl=29717&c=ib&aff=105360" target="ejejcsingle">ClassiPress.</a>') ));
	} return $links; }
add_filter( 'plugin_row_meta', 'set_plugin_meta06', 10, 2 );

/* Main plugin function */
function site_wpc_mail_from ($wpc_from_email) {
  $site_wpc_mail_from_email = get_option('site_mail_from_email');
  if(empty($site_wpc_mail_from_email)) {
    return $wpc_from_email;
  }
  else {
    return $site_wpc_mail_from_email;
  }
}

function site_wpc_mail_name ($wpc_mail_name) {
  $site_wpc_mail_name = get_option('site_mail_from_name');
  if(empty($site_mail_from_name)) {
    return $wpc_mail_name;
  }
  else {
    return $site_wpc_mail_name;
  }
}

add_filter('wp_mail_from','site_wpc_mail_from',1);
add_filter('wp_mail_from_name','site_wpc_mail_name',1);

?>