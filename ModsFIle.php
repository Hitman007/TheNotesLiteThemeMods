<?php
/*
Plugin Name: TheNotesLiteThemeMods
Plugin URI: http://customrayguns.com/
Description: 
Version: 0.1
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

namespace TheNotesLiteThemeMods;

add_action( 'wp_footer', 'your_function' );

	//footer-copyright-wrapper
	
	
	function your_function() {
		echo '
	jQuery( document ).ready(function() {
	alert( "ready!" );
	});
	';
	}