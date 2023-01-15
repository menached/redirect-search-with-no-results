<?php
/*
Plugin Name: Zero Results Redirect
Plugin URI: http://www.devopsandplatforms.com/
Description: Redirects the search page if 0 results found
Version: 0.1
Author: David Menache
Author URI: http://www.devopsandplatforms.com/
License: GPL2
*/

//Redirect to custom page
function zero_results_redirect() {
	if ( is_search() && !have_posts() ) {
		wp_redirect('https://www.example.com/zero-results-page/');
		exit;
	}
}
add_action('template_redirect', 'zero_results_redirect');
?>
