<?php 
function eh_from_mail_options() {
  echo '<div class="wrap">';
 
 echo '<div id="icon-options-general" class="icon32"><br /></div><h2>'.get_name_eh_from_mail().' Activation</h2>';
  eh_from_mail_table_start('Activate', 'eh_from_mail_form_activate');
echo '
<tr class="alternate">
<td>Active Plugin:</td>
<td><input name="eh_from_mail_activate" value="true" type="checkbox"'; checked("true", get_option("eh_from_mail_activate")); echo ' /></td>
</tr>
  ';
  eh_from_mail_table_stop();
  
 echo '<div id="icon-tools" class="icon32"><br /></div><h2>'.get_name_eh_from_mail().' Options</h2>';
  eh_from_mail_table_start('Options', 'eh_from_mail_options');
echo '

<tr class="alternate">
<td>From Email Address:</td> 
<td> ' ?>
<input type="text" id="admin_form" name="site_mail_from_email" value="<?php echo get_option('site_mail_from_email'); ?>" />
<?php echo '</td>
</tr>
<tr class="alternate">
<td>From Email Name:</td>
<td> ' ?>
<input type="text" id="admin_form" name="site_mail_from_name" value="<?php echo get_option('site_mail_from_name'); ?>" />
<?php echo ' </td>
</tr>
  ';
  eh_from_mail_table_stop();
?>
  <div style=" text-align:center;">
<p>
<script type="text/javascript"><!--
google_ad_client = "pub-9151914729117702";
/* Themes And Plugins 2 */
google_ad_slot = "0382732779";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></p></div>
<?php echo '</div>';
} ?>