<?php function eh_from_mail_update() {
 echo '<div class="wrap">';
 echo '<div id="icon-index" class="icon32"><br /></div><h2>Update Information</h2>'; 
 if (eh_from_mail_updates() > $_SESSION['eh_from_mail_updates_version']) {
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.erichamby.com/wp-updates/from_email_update.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
	} else { 
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.erichamby.com/wp-updates/from_email_no_update.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
	} 
  	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.erichamby.com/wp-updates/from_email_version_history.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
echo '</div>';
}
?>