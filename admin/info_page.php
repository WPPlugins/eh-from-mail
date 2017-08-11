<?php
/* Starts the admin menu page */
function eh_from_mail_info() {
   echo '
<div class="wrap">
<div id="icon-index" class="icon32"><br />
</div>
<h2>Information</h2>
<p>
<table class="widefat">
  <thead>
    <tr>
      <th>Instructions</th>
      <th><span style="float:right"><small>'.get_version_eh_from_mail().'</small></span></th>
    </tr>
  </thead>
  <tr class="alternate">
   <td>If you need to know how to use this plugin please vist <a href="http://erichamby.com" target="_blank">EricHamby.Com</a>.</td>
    <td></td>
  </tr>
</table>
</p>
<div id="icon-themes" class="icon32"><br />
</div>
<h2>'.get_name_eh_from_mail().'Information</h2>
<p>
<table class="widefat">
<thead>
  <tr>
    <th>'.get_name_eh_from_mail().'</th>
    <th><span style="float:right"><small>'.get_version_eh_from_mail().'</small></span></th>
  </tr>
</thead>
<tr class="alternate">
  <td>Plugin Name:</td>
  <td>'.get_name_eh_from_mail().'</td>
</tr>
<tr class="alternate">
  <td>Plugin Version:</td>
  <td>'.get_version_eh_from_mail().'</td>
</tr>
<tr class="alternate">
  <td>Plugin Build:</td>
  <td>'.get_build_eh_from_mail().'</td>
</tr>
<tr class="alternate">
  <td>Author:</td>
  <td><a href="http://erichamby.com" target="_blank">Eric Hamby</a></td>
</tr>
<tr class="alternate">
  <td>Release Date:</td>
  <td>02/13/2010</td>
</tr>
<tr class="alternate">
  <td>Wordpress Version:</td>
  <td>'; ?>
<?php bloginfo('version'); ?>
<?php echo '</td>
</tr>
<tr class="alternate">
<td>FAQ:</td>
<td><a href="http://wpchoice.com" target="_blank">FAQ</a></td>
</tr>
<tr class="alternate">
<td>Donations:</td>
<td><a href="http://wpchoice.com" target="_blank">Donations</a></td>
</tr>
<tr class="alternate">
<td>Support Forums:</td>
<td><a href="http://wpchoice.com" target="_blank">Support</a></td>
</tr>
<tr class="alternate">
			<td colspan="2">
			<span class="button" style="float:left"><a href="http://erichamby.com" target="_blank">Eric Hamby</a></span>
			<span class="button" style="float:right"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CT2CD6BRPN8KN" target="_blank">Donations</a></span>
			</td>
		</tr>
</table>
</p>';  ?>
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
<?php echo '</div>'; ?>
<?php
}
?>