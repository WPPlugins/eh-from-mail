<?php 
function eh_from_mail_admin_init() {
	register_setting('eh_from_mail_form_activate', 'eh_from_mail_activate');
	register_setting('eh_from_mail_options', 'site_mail_from_email');
	register_setting('eh_from_mail_options', 'site_mail_from_name');
} 
add_action('admin_init', eh_from_mail_admin_init);
?>