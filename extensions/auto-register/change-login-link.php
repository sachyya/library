<?php
/*
 * Plugin Name: Easy Digital Downloads - Auto Register Login Link
 * Description: Replaces the login link included in the Auto Register email, which directs customers to log into their account.
 * Author: EDD Team
 * Version: 1.0
 */

// replace the default WordPress login link in Auto Register email
function custom_edd_auto_register_login_link( $login_url ) {

	// replace http://yoursite.com with your real domain where WordPress is installed
	// replace http://yoursite.com/sign-in with the URL you want to send users to
	$login_url = str_replace(
		'http://yoursite.com/wp-login.php',
		'http://yoursite.com/sign-in',
		$login_url
	);
	return $login_url;
}
add_filter( 'edd_auto_register_email_body', 'custom_edd_auto_register_login_link' );