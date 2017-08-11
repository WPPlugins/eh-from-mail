<?php
/* Gets plugin information which is used throughout the files */
function get_name_eh_from_mail(){
	global $ehfromemailloc;
	$theme_data = implode('', file(ABSPATH."/wp-content/plugins/".$ehfromemailloc."/eh_from_mail.php"));
	if (preg_match("|Plugin Name:(.*)|i", $theme_data, $name_eh_from_mail)) {
		$name_eh_from_mail = $name_eh_from_mail[1];
	}
	return $name_eh_from_mail;
} 
function get_version_eh_from_mail(){
	global $ehfromemailloc;
	$theme_data = implode('', file(ABSPATH."/wp-content/plugins/".$ehfromemailloc."/eh_from_mail.php"));
	if (preg_match("|Version:(.*)|i", $theme_data, $version_eh_from_mail)) {
		$version_eh_from_mail = $version_eh_from_mail[1];
	}
	return $version_eh_from_mail;
} 
function get_build_eh_from_mail(){
	global $ehfromemailloc;
	$theme_data = implode('', file(ABSPATH."/wp-content/plugins/".$ehfromemailloc."/eh_from_mail.php"));
	if (preg_match("|Build:(.*)|i", $theme_data, $build_eh_from_mail)) {
		$build_eh_from_mail = $build_eh_from_mail[1];
	}
	return $build_eh_from_mail;
} 

/* Starts the plugins admin menu */
add_action('admin_menu', 'eh_from_mail_info_page'); 
function eh_from_mail_info_page(){
 global $ehfromemaillogo;
 add_menu_page('From Email', 'From Email', 8, 'eh_from_mail', 'eh_from_mail_info', $ehfromemaillogo);
 $mypage = add_submenu_page('eh_from_mail', 'Options', 'Options', 8, 'plugin_options_eh_from_mail', eh_from_mail_options);
 /*add_submenu_page('eh_from_mail', 'Update', 'Update', 8, 'plugin_update_eh_from_mail', eh_from_mail_update);*/
 add_submenu_page('eh_from_mail', 'Eric Hamby', 'Eric Hamby', 8, 'eric_hamby_eh_from_mail', erichamby_eh_from_mail_update);
 add_action( "admin_print_scripts-$mypage", 'eh_from_mail_admin_head' );
}

/* Gets the JS files used for the plugin */
function eh_from_mail_admin_head() {
	global $ehfromemaildir;
	wp_enqueue_script('loadjs', $ehfromemaildir . '/admin/js/jquery.js');
	wp_enqueue_script('loadjsone', $ehfromemaildir . '/admin/js/jquery.checkbox.min.js');
	wp_enqueue_script('loadjstwo', $ehfromemaildir . '/admin/js/jsslideone.js');

/* Chooses the CSS sheet based on browser being used */	
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
	require_once('admin_head_css_ie.php'); } else { require_once('admin_head_css.php');
}}

/* Function for the Eric Hamby page */
function erichamby_eh_from_mail_update() {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.erichamby.com/wp-files/backend_erichamby.php');
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);	
}

/* Function for the WP Choice page */
function wpchoice_eh_from_mail_update() {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.erichamby.com/wp-files/backend_wpchoice.php');
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);	
}

/* Function for the updater */
session_start();
$_SESSION['eh_from_mail_updates_version'] = '1.0' ;
function eh_from_mail_updates()
 {
$site_url = 'http://www.erichamby.com/wp-updates/from_email_update.php';
$ch = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, $site_url);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
 
ob_start();
curl_exec($ch);
curl_close($ch);
$file_contents = ob_get_contents();
ob_end_clean();

   if (preg_match ("@\<span\>(.*)\</span\>@i", $file_contents, $out)) {
   return $out[1];
   
  }
 } 
 
 /* Starts the theme options tables */
function eh_from_mail_table_start($name, $field) {
	echo '<p><table class="widefat">
    <thead>
      <tr>
        <th width="300px;">'.$name.'</th>
		<th><span style="float:right"><small>'.get_version_eh_from_mail().'</small></span></th>
      </tr>
    </thead>';
	echo '<form method="post" action="options.php">';
	settings_fields($field);
}

/* Ends the theme options tables */
function eh_from_mail_table_stop() {
	echo '
	<tr class="alternate">
			<td colspan="2">
			<span style="float:left"><input type="submit" class="button" value="Save Options" /></span>
			<span class="button" style="float:right"><a href="http://wpchoice.com" target="_blank">Wp Choice</a></span>
			</td></tr>
			</form>
	</table></p>';
}
?>